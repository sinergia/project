<?php

use Sinergia\Gd\ThumbController;

require_once 'php/vendor/autoload.php';

Sinergia\Sinergia\Error::toException();
$controller = new ThumbController();
$controller->dispatch(null, __DIR__);
