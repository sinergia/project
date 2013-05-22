<?php

// arquivo de configuração para o executável php/bin/cs-fixer.sh

$finder = Symfony\CS\Finder\DefaultFinder::create()
->exclude('php/bin')
->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
->finder($finder)
;
