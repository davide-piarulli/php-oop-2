<?php

class Animals
{
  public $type;

  public function __construct(string $_type)
  {
    $this->$_type;
  }
}
