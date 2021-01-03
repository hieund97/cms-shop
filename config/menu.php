<?php
return [
    'home_url' => env('APP_URL', '/'),

    'data' => [
        // Menu Dashboard
        'dashboard' => [
            'name'      => 'Dashboard',
            'icon'      => 'fas fa-fw fa-tachometer-alt',
            'url'       => '/',
        ],
    
        // Menu Product
        'product' => [
            'name'      => 'Product',
            'icon'      => 'fas fa-shopping-bag',
            'url'       => '/product',
            'child'     => [
                'list_product' => [
                    'name'      => 'List Product',
                    'url'       => '/product',
                ],
                'create_product' => [
                    'name'      => 'Create Product',
                    'url'       => '/product/create',
                ],
            ],
        ],

        // Menu Category
        'category' => [
            'name'      => 'Category',
            'icon'      => 'fas fa-layer-group',
            'url'       => '/category',
            'child'     => [
                'list_category' => [
                    'name'      => 'List Category',
                    'url'       => '/category',
                ],
                'create_category' => [
                    'name'      => 'Create Category',
                    'url'       => '/category/create',
                ],
            ],
        ],

        // Menu user
        "user" => [
            "name" => "Users",
            "icon" => "fas fa-user-circle",
            "url"  => "/user",
            "child"=> [
                "list_user" => [
                    "name"      => "List user",
                    "url"       => "/user"
                ],
                "create_user" => [
                    "name" => "Create user",
                    "url"  => "/user/create"
                ]
            ]
        ],

         // Menu Setting
         'setting' => [
            'name'      => 'Setting',
            'icon'      => 'fas fa-cog',
            'url'       => '/setting',
        ],
    ],
];
