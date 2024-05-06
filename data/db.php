<?php

// require_once __DIR__ . '/Models/Product.php';

$products = [
  new Cibo(1, 'Croccantini', 8.99, new ProductCategory('Cani', 'urlicona'), 'nome brand', 'taglia grande', 8),
  new Cibo(2, 'Umido', 4.99, new ProductCategory('Gatti', 'urlicona'), 'nome brand', 'taglia piccola', 10),
  new Cibo(3, 'Cibo in scatola', 4.99, new ProductCategory('Gatti', 'urlicona'), 'nome brand', 'taglia piccola', 7),
  // new Giochi(4, 'Pallina', 4.99, new ProductCategory('Gatti', 'urlicona'), 'nome brand', 'taglia media', 8),
];



// var_dump($products);
