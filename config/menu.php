<?php
return [
    'home_url' => '/admin',

    'data' => [
        // Menu Dashboard
        'dashboard' => [
            'name'      => 'Dashboard',
            'icon'      => 'fas fa-fw fa-tachometer-alt',
            'url'       => '/admin',
        ],
    
        // Menu Product
        'product' => [
            'name'      => 'Product',
            'icon'      => 'fas fa-shopping-bag',
            'url'       => '/admin/product',
            'child'     => [
                'list_product' => [
                    'name'      => 'List Product',
                    'url'       => '/admin/product',
                ],
                'create_product' => [
                    'name'      => 'Create Product',
                    'url'       => '/admin/product/create',
                ],
            ],
        ],

        // Menu Category
        'category' => [
            'name'      => 'Category',
            'icon'      => 'fas fa-layer-group',
            'url'       => '/admin/category',
            'child'     => [
                'list_category' => [
                    'name'      => 'List Category',
                    'url'       => '/admin/category',
                ],
                'create_category' => [
                    'name'      => 'Create Category',
                    'url'       => '/admin/category/create',
                ],
            ],
        ],

        "user" => [
            "name" => "Users",
            "icon" => "fas fa-user-circle",
            "url"  => "/admin/user",
            "child"=> [
                "list_user" => [
                    "name"      => "List user",
                    "url"       => "/admin/user"
                ],
                "create_user" => [
                    "name" => "Create user",
                    "url"  => "/admin/user/create"
                ]
            ]
        ],

         // Menu Category
         'setting' => [
            'name'      => 'Setting',
            'icon'      => 'fas fa-cog',
            'url'       => '/admin/setting',
        ],
    ],
];
