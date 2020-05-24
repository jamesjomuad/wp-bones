<?php

namespace garden\Http\Controllers;

use garden\Http\Controllers\Controller;

class ComponentController extends Controller
{

    public function index() {

        return garden()->view('components.index')
            ->withAdminStyles('tailwind.min')
            ->withAdminStyles('tailwind.utilities.min');

    }

}