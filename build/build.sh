#!/bin/bash

echo -e "\033[4mUpdating PHP Webhooks Library...\033[0m"

TMP_PROTO_PATH='./tmp_webhooks'

if [[ $1 == "local" ]]; then
  echo "Copying local webhooks repo..."
  cp -Rf ../../webhooks/ $TMP_PROTO_PATH
  rm -Rf $TMP_PROTO_PATH/.idea
else
  rm -rf ./tmp_webhooks
  (git clone https://github.com/chargehive/webhooks.git tmp_webhooks && cd $TMP_PROTO_PATH)
fi

/opt/homebrew/opt/php@7.4/bin/php ./v1.php
rm -rf ./tmp_webhooks

git add ../src/Generated/*
