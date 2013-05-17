BUGS:

O branch develop não possui vendors, pois o mesmo pode ser instalado separadamente por cada desenvolvedor.
Foi criado um branch deploy que possui os vendors utilizando git add -f.
O problema é que ao fazer git checkout deploy e depois git dev, as pastas vendor desaparecem.
