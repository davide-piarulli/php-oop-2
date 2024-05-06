<?php

require_once __DIR__ . '/ProductCategory.php';

class Product
{
  public $id;
  public $name;
  public $price;
  public $categories;

  public function __construct(
    int $_id,
    string $_name,
    float $_price,
    ProductCategory $_categories
  ) {
    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->categories = $_categories;
  }
}
