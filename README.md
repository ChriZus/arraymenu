This paaaackage has been forked for personal usage. please visit the priginal package at [wtabata/arraymenu](https://github.com/wtabata/arraymenu)

<h3 align="center">
  ArrayMenu 2
</h3>

<p align="center">
  Build Menu/Navbar from Bootstrap 5 with array[] o/
</p>


Install
---------------------------
```
composer require chrizus/arraymenu
```

Mode Simple
---------------------------
[Standard HTML list](https://www.w3schools.com/html/html_lists.asp) structure will be built

```php
$array = [
    'home' => [
        'name' => 'Label for Home',
        'link' => '#',
    ],
    [ /* << see, here don't have key. no matter. just for help u */
        'name' => 'Label for Contact'
    ],
];

$menu = new \Wt\ArrayMenu\Simple($array);
echo $menu;
```
output
```html
<ol class="more_class my_class">
    <li class=""><a class="" href="#">Label for Home</a></li>
    <li class="">Label for Contact</li>
</ol>
```

Default List Tag
---------------------------
```html
<ul> <!-- init - primary tag -->
    <li> <!-- item - secondary tag -->
        <a href="#"> - </a> <!-- link - content -->
    </li>
</ul>
```

Two ways to Configure tags
---------------------------
global
```php
//set primary Tag 
$menu->setInit(['tag'=>'ol', 'class' =>'my_class']);

//set secondary Tag
$menu_b->setItem(['tag'=>'li', 'class' =>'my_class_for_item other']);
```
or per item
```php
$array = [
    'config' => [ //set primary Tag 
        'tag' => 'ol',
        'class' => 'my_class'
    ],
    'home' => [
        'config' => [ //set secondary Tag
            'tag' => 'dd',
            'class' =>'my_class_for_item other'
        ],
        'name' => 'Label for Home',
        'link' => '#',
    ],
];
```

Mode Bootstrap 5
---------------------------
[Bootstrap 5 navbar](https://getbootstrap.com/docs/5.3/components/navbar/) structure will be built

```php
$array = [
    'home' => [
        'name' => 'Label for Home',
        'link' => '#',
        'class' => 'nav-link',
    ],
    'contact' => [
        'name' => 'Label for Contact',
        'link' => '#',
        'class' => 'nav-link',
    ],
    'sitemap' => [
        'name' => 'Label for Sitemap',
        'link' => '#',
        'class' => 'nav-link active',
    ]
];

$menu = new \WtArrayMenu\Bootstrap($array, $config_bootstrap = []);
echo $menu;
```

Default Config Bootstrap 5
```php
$config_bootstrap = [
    'position' => 'default',
    'color' => 'bg-primary',
    'container' => 'container',
    'brand' => [
        'name' => 'WT.dev',
        'image' => false,
        'link' => 'https://wtabata.com'
    ],
    'off_canvas' => false
];
```

### TO DO

## Docs

- [x] usage simple
- [x] usage with bootstrap 
- [x] defaults tags 
- [x] custom tags
- [ ] options base
- [ ] options bootstrap

## Base
- [ ] other non-standard tags

## Bootstrap
- [ ] scroll
