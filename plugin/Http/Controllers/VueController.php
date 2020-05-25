<?php

namespace garden\Http\Controllers;

use garden\Http\Controllers\Controller;

class VueController extends Controller
{

    public function index()
    {
        return garden()->view('vue.index')
            // Styles
            ->withAdminStyles('google-fonts')
            ->withAdminStyles('materialdesignicons.min')
            ->withAdminStyles('vuetify.min')

            // Scripts
            ->withAdminScripts('vue')
            ->withAdminScripts('vuetify')
            ->withAdminScripts('vue-script');
    }

}