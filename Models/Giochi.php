<?php

include_once __DIR__ . 'Product.php';

class Giochi extends Product
{

  public $brand;
  public $animalSize;
  public $rating;

  public function __construct(int $_id, string $_name, float $_price, array $_categories, string $_brand, string $_animalSize, float $_rating)
  {
    $this->brand = $_brand;
    $this->animalSize = $_animalSize;
    $this->rating = $_rating;
    parent::__construct($_id, $_name, $_price, $_categories);
  }
}
