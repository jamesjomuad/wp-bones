<?php

/*
|--------------------------------------------------------------------------
| Plugin Menus routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the menu routes for a plugin.
| In this context, the route are the menu link.
|
*/

return [
    'garden_collection' => [
        "page_title" => "Garden",
        "menu_title" => "Garden",
        'capability' => 'read',
        'icon' => 'dashicons-palmtree',
        'position' => 4,
        'items' => [
            [
                "page_title" => "Collections",
                "menu_title" => "Collections",
                'capability' => 'read',
                'route' => [
                    'get' => 'Collection\CollectionController@index'
                ],
            ],
            'components' => [
                "page_title" => "Components",
                "menu_title" => "Components",
                'capability' => 'read',
                'route' => ['get' => 'ComponentController@index'],
            ],
            'vue' => [
                "page_title" => "Vue",
                "menu_title" => "Vue",
                'capability' => 'read',
                'route' => ['get' => 'VueController@index'],
            ]
        ]
    ]
];
