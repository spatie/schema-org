#!/usr/bin/env bash

UTC_NOW=$(date -u +"%Y-%m-%d %T %Z")
php ./generate.php
git add .

if [[ `git status --porcelain` ]]; then
    git fetch --all
    export LATEST_TAG=$(git tag --list | awk '/./{line=$0} END{print line}')
    NEW_TAG=$(php -r "\$v = getenv('LATEST_TAG'); \$vs = explode('.', \$v); \$vs[1]++; echo implode('.', \$vs);")
    echo "changes at $UTC_NOW - release as $NEW_TAG"

    git commit --message="update types by current rdfa - $UTC_NOW"
    git tag --annotate "$NEW_TAG" --message="update types by current rdfa - $UTC_NOW"
    git push --all
else
    echo "nothing changed"
fi
