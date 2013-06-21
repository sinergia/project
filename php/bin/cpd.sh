# Copy/Paste Dectector
DIR=$(cd `dirname $0` && pwd)
cd $DIR/../
phpcpd.phar --progress --verbose $* lib/App
