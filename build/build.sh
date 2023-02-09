#! /bin/bash
openapi-generator-cli generate -g php -i api.json -c ./config.json -o ../  --skip-validate-spec --enable-post-process-file
cd ../
./git_push.sh youxianbo oceanengineSDK $1
