<?php

require_once __DIR__ . 'Models/Product.php';

$products = [
  new Cibo(1, 'cibo', 4.99, ['Cani'], 'Royal Canin', 'Taglia media', 8.5),
];

$categories = [
  'cani' => new ProductCategory('cani', 'fa-solid fa-dog'),
  'gatti' => new ProductCategory('gatti', 'fa-solid fa-cat'),
];
