<?php

require_once __DIR__ . 'Models/Product.php';

$db = [
  new Products(1, 'cibo', 4.99, ['Cani']),
  new Products(2, 'giochi', 2.99, ['Gatti']),
];
