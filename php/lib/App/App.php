<?php

namespace App;

use Sinergia\Helpers as H;
use Sinergia\Request;

class App
{
    public function __invoke()
    {
        $request = new Request();
        $TPL = H::render($request->path ?: 'home');
        return H::render('layout/app', compact('TPL'));
    }
}
