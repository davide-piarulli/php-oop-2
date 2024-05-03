<?php

require_once __DIR__ . 'Models/Product.php';

$products = [
  new Cibo(1, 'cibo', 4.99, ['Cani'], 'Royal Canin', 'Taglia media', 8.5),
  new Cucce(1, 'cucce', 18.99, ['Cani'], 'Abracadabra', 'Taglia grande', 7),
  new Giochi(1, 'giochi', 2.99, ['Gatti'], 'Catoys', 'Taglia piccola', 6),
];

$categories = [
  'cani' => new ProductCategory('cani', 'fa-solid fa-dog'),
  'gatti' => new ProductCategory('gatti', 'fa-solid fa-cat'),
];
