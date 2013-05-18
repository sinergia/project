DIR=$(cd `dirname $0` && pwd)
cd $DIR/../tests
phpunit .
