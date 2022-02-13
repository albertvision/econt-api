#!/usr/bin/env bash
DIST_DIR="dist"
#rm -rf dist
openapi-generator generate -i postman/schemas/schema.yaml -g php -o $DIST_DIR -c config.yaml ||exit 1
cd dist && composer i