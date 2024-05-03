<?php

require_once __DIR__ . 'Animals.php';

class Products
{
  protected $id;
  protected $name;
  protected $price;
  // questa sarà la categoria: Animals
  protected $animals;

  public function __construct(int $_id, string $_name, float $_price, Animals $_animals)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->animals = $_animals;
  }
}
