#!/bin/bash

script_dir="$(cd "$(dirname "$0")/.." && pwd)"

echo "当前目录为：$script_dir"

cd "$script_dir" && php ./gen_api_config.php && php ./gen_api_open.php