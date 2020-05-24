<?php

namespace garden\Http\Controllers;

use garden\WPBones\Routing\Controller as BaseController;

abstract class Controller extends BaseController {

    public function publicUri()
    {
        return garden()->getBaseUri() . "/public/";
    }

}