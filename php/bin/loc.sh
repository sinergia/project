DIR=$(cd `dirname $0` && pwd)
cd $DIR/../
phploc.phar --progress lib/App
