<?php
require __DIR__ . '/../../vendor/autoload.php';

use Wt\ArrayMenu;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<?php

$array_b = [
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
?>


        <?php
        $config = [
            'color' => 'bg-warning',
        ];

        $menu_d = new ArrayMenu\Bootstrap($array_b, $config);
        echo $menu_d;?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
