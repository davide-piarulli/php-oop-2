<?php

class ProductCategory
{
  public $type;
  public $icon;

  public function __construct(string $_type, string $_icon)
  {
    $this->type = $_type;
    $this->icon = $_icon;
  }
}
