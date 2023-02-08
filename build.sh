#! /bin/bash

curl "http://127.0.0.1:4523/export/openapi?projectId=2255772&specialPurpose=openapi-generator" > api.json
openapi-generator-cli generate -g php -i api.json --skip-validate-spec -c ./config.json -o ./dist
