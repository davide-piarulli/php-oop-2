<?php

require_once __DIR__ . 'Models/Product.php';

$db = [
  new Products(1, 'cibo', 4.99, new Animals('Cani')),
  new Products(2, 'giochi', 2.99, new Animals('Gatti')),
];
