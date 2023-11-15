 cur_dir="$(pwd)/script"

 echo "当前目录为：$cur_dir"

 cd $cur_dir && php ./gen_api_config.php && php ./gen_api_open.php