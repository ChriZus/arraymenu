<?php
include __DIR__ . '/src/Controller/MenuController.php';

use WtMenu\Controller\MenuController;

$array_simple = [
    'home' => [
        'name' => 'Label for Home',
        'link' => '#',
    ],
    [ /* << see, here don't have key. no matter. just for help u */
        'name' => 'Label for Contact'
    ],
];

$array_level_one = [
    'home' => [
        'name' => 'Label for Home',
        'link' => '#',
    ],
    'contact' => [
        'name' => 'Label for Contact',
        'link' => '#',
    ],
    'sitemap' => [
        'name' => 'Label for Sitemap',
        'link' => '#',
    ],
    'products' => [
        'name' => 'Label for Products',
        'link' => '#',
        'level' => [
            [
                'name' => 'Label for Man (into Producst)',
                'link' => '#',
            ],
            [
                'name' => 'Label for Woman (into Producst)',
                'link' => '#',
            ],
        ]
    ]
];

$array_level_two = [
    'home' => [
        'name' => 'Label for Home',
        'link' => '#'
    ],
    'contact' => [
        'name' => 'Label for Contact',
        'link' => '#'
    ],
    'sitemap' => [
        'name' => 'Label for Sitemap',
        'link' => '#'
    ],
    'products' => [
        'name' => 'Label for Products',
        'link' => '#',
        'level' => [
            'product_man' => [
                'name' => 'Label for Man (into Producst)',
                'link' => '#',
                'level' => [
                    'product_man_shoes' => [
                        'name' => 'Label for Shoes  (into Man)',
                        'link' => '#',
                    ],
                    'product_man_belt' => [
                        'name' => 'Label for Belt (into Man)',
                        'link' => '#',
                    ],
                ]
            ],
            'produtc_woman' => [
                'name' => 'Label for Woman (into Producst)',
                'link' => '#',
                'level' => [
                    'product_woman_dress' => [
                        'name' => 'Label for Dress  (into Woman)',
                        'link' => '#',
                    ],
                    'product_woman_pantuhose' => [
                        'name' => 'Label for Pantyhose (into Woman)',
                        'link' => '#',
                    ],
                ]
            ],
        ]
    ]
];

$menu = new MenuController($array_simple);
echo $menu->start()->show();

echo "\n\n\n";

$menu_a = new MenuController($array_simple);
$menu_a->setInit("ul class='my_class'");
echo $menu_a->start()->show();

echo "\n\n\n";

$menu_b = new MenuController($array_level_one);
$menu_b->setInit("ul class='my_class class_for_ul'");
$menu_b->setItem("li class='my_class_for_item other'");
echo $menu_b->start()->show();

echo "\n\n\n";

$menu_c = new MenuController($array_level_two);
$menu_c->setInit("ol");
echo $menu_c->start()->show();

echo "\n\n\n";

$menu_c = new MenuController($array_simple);
$menu_c->setInit("dt");
$menu_c->setItem("dd");
echo $menu_c->start()->show();