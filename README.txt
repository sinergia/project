SETUP
executar php/bin/dev-install.sh para instalar os vendors de php e assets.


GIT FTP
    Installing for Mac (require brew)
https://github.com/git-ftp/git-ftp/blob/develop/INSTALL.md
brew install grep
brew install git
brew install curl --with-ssl --with-ssh
brew install git-ftp

    Using
git config git-ftp.url ftp.example.com/path/to/root
git config git-ftp.user usuario
git config git-ftp.password senha


TODO:

criar script que converte classes em apenas as declarações, sem a implementação, para servir de autocomplete.


BUGS:

O branch develop não possui vendors, pois o mesmo pode ser instalado separadamente por cada desenvolvedor.
Foi criado um branch deploy que possui os vendors utilizando git add -f.
O problema é que ao fazer git checkout deploy e depois git dev, as pastas vendor desaparecem.
