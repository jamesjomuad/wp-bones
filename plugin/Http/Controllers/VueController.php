<?php

namespace garden\Http\Controllers;

use garden\Http\Controllers\Controller;

class VueController extends Controller
{

    public function index()
    {
        return garden()->view('vue.index')
            ->withAdminScripts('vue.min')
            ->withAdminScripts('vue-script');
    }

}