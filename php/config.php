<?php

/**
 * Todas as configurações do site devem ser colocadas neste arquivo
 */

// utiliza o autoload do composer, para auto carregar as classes
require_once 'vendor/autoload.php';

set_include_path(__DIR__.'/tpl');

$app = new App\App();
