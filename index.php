<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/ProductCategory.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/data/db.php';


$foods = array_filter($products, fn ($product) => get_class($product) === 'Cibo');
$toys = array_filter($products, fn ($product) => get_class($product) === 'Giochi');

// var_dump($foods);

require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/home.php';
