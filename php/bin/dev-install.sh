DIR=$(cd `dirname $0` && pwd)
cd $DIR/../
composer install
cd $DIR/../../
cdnjs install
git status
