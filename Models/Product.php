<?php

require_once __DIR__ . '/Animals.php';

class Product
{
  protected $id;
  protected $name;
  protected $price;
  protected $categories;

  public function __construct(int $_id, string $_name, float $_price, array $_categories)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->categories = $_categories;
  }
}
