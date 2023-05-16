<?php
require __DIR__ . '/../../vendor/autoload.php';

use Wt\ArrayMenu;

$array_simple = [
    'config' => [
        'type' => 'I',
        'start' => 2,
        'class' => 'more_class',
    ],
    'home' => [
        'name' => 'Label for Home',
        'link' => '#',
    ],
    [ /* << see, here don't have key. no matter. just for help u */
        'name' => 'Label for Contact'
    ],
];

$array_level_one = [
    'config' => [
        'type' => 'A',
        'class' => 'more_class',
    ],
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
        'link' => '#',
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
                'name' => 'Label for Man (into Product)',
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
            'product_woman' => [
                'name' => 'Label for Woman (into Product)',
                'link' => '#',
                'level' => [
                    'product_woman_dress' => [
                        'name' => 'Label for Dress  (into Woman)',
                        'link' => '#',
                    ],
                    'product_woman_pantyhose' => [
                        'name' => 'Label for Pantyhose (into Woman)',
                        'link' => '#',
                    ],
                ]
            ],
        ]
    ]
];

$menu = new ArrayMenu\Simple($array_simple);
$menu->setInit(['tag'=>'ol', 'class' =>'my_class']);
echo $menu;

echo "\n\n\n";

$menu_a = new ArrayMenu\Simple($array_simple);
$menu_a->setInit(['tag'=>'ul', 'class' =>'my_class']);
echo $menu_a;

echo "\n\n\n";

$menu_b = new ArrayMenu\Simple($array_level_one);
$menu_b->setInit(['tag'=>'ol', 'class' =>'my_class class_for_ul']);
$menu_b->setItem(['tag'=>'li', 'class' =>'my_class_for_item other']);
echo $menu_b;

echo "\n\n\n";

$menu_c = new ArrayMenu\Simple($array_level_two);
$menu_c->setInit(['tag'=>'ol', 'class' =>'']);
echo $menu_c;

echo "\n\n\n";

$menu_c = new ArrayMenu\Simple($array_simple);
$menu_c->setInit(['tag'=>'dt', 'class' =>'']);
$menu_c->setItem(['tag'=>'dd', 'class' =>'']);
echo $menu_c;
