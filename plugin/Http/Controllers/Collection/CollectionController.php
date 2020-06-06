<?php

namespace garden\Http\Controllers\Collection;

use garden\Http\Controllers\Controller;

class CollectionController extends Controller
{

    public function index()
    {
        return garden()->view( 'collection.index' )
        // Styles
        ->withAdminStyles('google-fonts')
        ->withAdminStyles('materialdesignicons.min')
        ->withAdminStyles('vuetify.min')
        ->withAdminStyles('collection')

        // Scripts
        ->withAdminScripts('vue')
        ->withAdminScripts('vuetify')
        ->withAdminScripts('collection');
    }

}