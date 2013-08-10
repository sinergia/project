DIR=$(cd `dirname $0` && pwd)
cd $DIR/../../

echo Remove git inside php vendors
find ./php/vendor -name ".git" | wc -l
find ./php/vendor -name ".git" -exec rm -rf {} \;

echo Remove .DS_Store
find . -name ".DS_Store" | wc -l
find . -name ".DS_Store" -exec rm -rf {} \;

echo Remove .orig files from merge
find . -name "*.orig" | wc -l
find . -name "*.orig" -exec rm {} \;
