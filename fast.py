# -*- coding: utf-8 -*-

from bs4 import BeautifulSoup
import json
import requests

from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
import sys
import os

class ParamsProcessor:
    def process(self, param_rows):
        pass

class TableContainerProcessor(ParamsProcessor):
    def process(self, param_rows):
        return process_params(param_rows, {'name': 'td'})

class ApiTableProcessor(ParamsProcessor):
    def process(self, param_rows):
        return process_params(param_rows, {'class_': 'col'})

def get_html_content(url):
    try:
        options = Options()
        options.headless = True  # 无头模式，不弹出浏览器窗口
        driver = webdriver.Chrome(options=options)

        driver.get(url)
        wait = WebDriverWait(driver, 10)
        wait.until(EC.presence_of_element_located((By.TAG_NAME, 'body')))  # 等待页面加载完成
        time.sleep(2)  # 等待5秒钟，可以根据需要进行调整

        return driver.page_source
    except Exception as e:
        print("出现错误:", e)
    finally:
        driver.quit()

def process_params(param_rows, cell_type_dict):
    levelMap = {}
    params = {}
    for row in param_rows[1:]:
#         cells = row.find_all(class_='col')
        cells = row.find_all(**cell_type_dict)

        if not cells:
            continue

        param_name = cells[0].find('p').text.strip().replace(' ', '').replace('必填', '')
        param_type = cells[1].find('p').text.strip()

        if cells[2].find('p') is None:
            param_desc = cells[2].text.strip().replace(' ', '')
        else:
            param_desc = cells[2].find('p').text.strip().replace(' ', '')

        if '废弃' in param_name:
            continue

        node = {
            'type': param_type,
            'description': param_desc,
            'level': 0,
            'children': {}
        }

        is_sub = cells[0].find(attrs={"data-level": True})
        if is_sub is None:
            is_sub = row.has_attr("data-level") and row

        level = 0
        if is_sub is not None and is_sub is not False:
            level = int(is_sub.get('data-level'))
            node['level'] = level

        if is_sub is not None and level > 0:
            levelMap[level] = node

            if levelMap.get(level - 1) is not None:
                levelMap[level - 1]['children'][param_name] = node
        else:
            levelMap = {0:node}
            if param_name =='date':
                param_name = 'data'
            params[param_name] = node
    return params

print('采集地址：', sys.argv[1])

html = get_html_content(sys.argv[1])

# 使用BeautifulSoup解析HTML
soup = BeautifulSoup(html, 'html.parser')

title = soup.find(class_='qz-editor-render-title').text.strip()
print(title)
# 提取请求地址
address_tag = soup.find(id='link-0')
# 获取紧随其后的 a 标签的 href 属性值
request_url = address_tag.find_next('a')['href']

# 提取请求方式
request_tag = soup.find(text="请求方法") or soup.find(text="请求方式")
request_method = request_tag.find_next('p').find('strong')

if (request_method is None):
    request_method = request_tag.find_next('p').text.strip()
else:
    request_method = request_tag.find_next('p').find('strong').text.strip()

# 提取请求参数
params_table_tag = soup.find(text='请求参数')
if params_table_tag is not None:
    params_table = params_table_tag.find_next(class_='table-container') and params_table_tag.find_next(class_='table-container').find('table')
    if params_table is not None:
        param_rows = params_table.find_all('tr')
        processor = TableContainerProcessor()
        request_params = processor.process(param_rows)

    params_table = params_table_tag.find_next(class_='api-table')
    if params_table is not None:
        param_rows = params_table.find_all(class_='row')
        processor = ApiTableProcessor()
        request_params = processor.process(param_rows)

# 提取应答参数
response_params = {}
params_table_tag = soup.find(text='应答字段')

if params_table_tag is None:
    params_table_tag = soup.find(text='应答参数')

params_table = params_table_tag.find_next(class_='table-container') and params_table_tag.find_next(class_='table-container').find('table')
if params_table is not None:
    param_rows = params_table.find_all('tr')
    processor = TableContainerProcessor()
    response_params = processor.process(param_rows)

params_table = params_table_tag.find_next(class_='api-table')
if params_table is not None:
    param_rows = params_table.find_all('section')
    processor = ApiTableProcessor()
    response_params = processor.process(param_rows)

# 将提取的信息转换为JSON格式
data = {
    'request_title': title,
    'request_doc': sys.argv[1],
    'request_url': request_url,
    'request_method': request_method,
    'request_params': request_params,
    'response_params': response_params
}
json_data = json.dumps(data, indent=4, ensure_ascii=False)

with open("doc.json", "w") as file:
    file.write(json_data)

if (sys.argv[2] is None):
    exit('gen code path not valid')

# 运行命令
exit_code = os.system('cd ./script && php ./gen_code_template.php ' + sys.argv[2])
# 检查命令的退出状态码
if exit_code == 0:
    # 命令执行成功
    print("生成模版命令执行成功")
else:
    # 命令执行失败
    print("生成命令执行失败")

exit_code = os.system('sh ./gen_api.sh')