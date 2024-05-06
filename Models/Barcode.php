<?php
trait Barcode
{
  public $barcode;
  public function getBarcode()
  {
    return "$this->barcode";
  }
}
