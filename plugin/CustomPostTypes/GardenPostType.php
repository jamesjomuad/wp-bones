<?php

namespace garden\CustomPostTypes;

use garden\WPBones\Foundation\WordPressCustomPostTypeServiceProvider as ServiceProvider;

class GardenPostType extends ServiceProvider
{

  protected $id     = 'garden_cpt';
  protected $name   = 'Garden';
  protected $plural = 'Gardens';

  /**
   * You may override this method in order to register your own actions and filters.
   *
   */
  public function boot()
  {
    // You may override this method
  }

  /**
   * Override this method to save/update your custom data.
   * This method is called by hook action save_post_{post_type}`
   *
   * @param int|string $post_id Post ID
   * @param object     $post    Optional. Post object
   *
   */
  public function update( $post_id, $post )
  {
    // You can override this method to save your own data
  }

}