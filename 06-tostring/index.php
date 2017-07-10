<?php
  class NewClass{
    private $data;

    public function __construct($newdata) {
      $this->data = $newdata;
    }

    // return string from echo $object
    public function __toString() {
      return "Now you can echo ".__CLASS__." without error";
    }

  }

  $obj = new NewClass("1");
  echo $obj;
