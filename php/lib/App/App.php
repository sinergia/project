<?php

namespace App;

use Sinergia\Helpers as H;

class App
{
    public function __invoke()
    {
        return H::render('layout/app');
    }
}
