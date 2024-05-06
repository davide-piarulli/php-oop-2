<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/ProductCategory.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/data/db.php';


$foods = array_filter($products, fn ($product) => get_class($product) === 'Cibo');
$toys = array_filter($products, fn ($product) => get_class($product) === 'Giochi');
$cucce = array_filter($products, fn ($product) => get_class($product) === 'Cucce');

// var_dump($foods);

$pappa1 = new Cibo(1, 'Croccantini', 8.99, new ProductCategory('Cani', 'urlicona'), 'nome brand', 'taglia grande', 8);
$pappa1->barcode = '8007441453268';
var_dump($pappa1);

require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/home.php';
