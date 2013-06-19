<?php

/**
 * Todas as configurações do site devem ser colocadas neste arquivo
 */

// utiliza o autoload do composer, para auto carregar as classes
require_once 'vendor/autoload.php';
require_once 'helpers.php';

error_reporting(E_ALL);

\Sinergia\Error::toException();
\Sinergia\Error::enableDefaultExceptionHandler();

\Analog\Analog::handler( \Analog\Handler\ChromeLogger::init() );

set_include_path(__DIR__.'/tpl');

$app = new App\App();
