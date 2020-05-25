<?php

namespace garden\Http\Controllers;

use garden\WPBones\Routing\Controller as BaseController;

abstract class Controller extends BaseController {

    public function publicUri()
    {
        return garden()->getBaseUri() . "/public/";
    }

    public function addJs()
    {
        return 'addJs';
    }

    public function addCss()
    {
        return 'addCss';
    }

}