<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Barcode.php';

class Cibo extends Product
{

  use Barcode;

  public $brand;
  public $animalSize;
  public $rating;

  public function __construct(
    int $_id,
    string $_name,
    float $_price,
    ProductCategory $_categories,
    string $_brand,
    string $_animalSize,
    float $_rating

  ) {
    parent::__construct($_id, $_name, $_price, $_categories);
    $this->brand = $_brand;
    $this->animalSize = $_animalSize;
    $this->rating = $_rating;
  }

  
}

