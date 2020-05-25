<?php

namespace garden\Http\Controllers;

use garden\Http\Controllers\Controller;

class VueController extends Controller
{

    public function index()
    {
        return garden()->view('vue.index')
            ->withAdminStyles('material-icons')
            ->withAdminStyles('vuetify.min')
            ->withAdminScripts('vue.min')
            ->withAdminScripts('vuetify.min')
            ->withAdminScripts('httpVueLoader')
            ->withAdminScripts('vue-router')
            ->withAdminScripts('vue-script');
    }

}