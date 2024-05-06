<?php

// require_once __DIR__ . '/Models/Product.php';

$products = [
  new Cibo(1, 'Titolo cibo 2', 8.99, new ProductCategory('Cani', 'urlicona'), 'nome brand', 'taglia grande', 8),
  new Cibo(1, 'Titolo cibo', 4.99, new ProductCategory('Gatti', 'urlicona'), 'nome brand', 'taglia piccola', 10),
];

var_dump($products);

// $categories = [
//   'cani' => new ProductCategory('cani', 'fa-solid fa-dog'),
//   'gatti' => new ProductCategory('gatti', 'fa-solid fa-cat'),
// ];

// var_dump($categories);
