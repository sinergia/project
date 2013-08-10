DIR=$(cd `dirname $0` && pwd)
cd $DIR/../../
composer install
cdnjs update
cdnjs install
git status
