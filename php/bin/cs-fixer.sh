if [ "$1" == "do" ]
then
    args=""
else
    # add --diff from command line
    args="--dry-run $*"
fi

php-cs-fixer fix --fixers=-short_tag -v --level=all $args ./php

if [ "$1" == "do" ]
then
    git status
fi
