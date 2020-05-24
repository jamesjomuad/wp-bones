<?php

namespace garden\Http\Controllers\Collection;

use garden\Http\Controllers\Controller;

class CollectionController extends Controller
{

  public function index()
  {
    return garden()->view( 'collection.index' )
      ->withAdminStyles( 'tailwind.min' );
  }

  public function store()
  {
    // POST
  }

  public function update()
  {
    // PUT AND PATCH
  }

  public function destroy()
  {
    // DELETE
  }

}