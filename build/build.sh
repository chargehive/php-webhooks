#!/bin/bash

echo -e "\033[4mUpdating PHP Webhooks Library...\033[0m"

rm -rf ./tmp_webhooks
(git clone https://github.com/chargehive/webhooks.git tmp_webhooks && cd ./tmp_webhooks)

php ./build.php
rm -rf ./tmp_webhooks
