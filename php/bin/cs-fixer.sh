if [ "$1" == "do" ]
then
    args=""
else
    # add --diff from command line
    args="--dry-run $*"
fi

php-cs-fixer fix -v --level=all $args .

if [ "$1" == "do" ]
then
    git status
fi
