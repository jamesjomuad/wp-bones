<?php

namespace garden\Http\Controllers\Dashboard;

use garden\Http\Controllers\Controller;

class DashboardController extends Controller
{

  public function index()
  {
    return garden()->view( 'dashboard.index' );
  }
}