<?php
  class NewClass{
    private $data;

    public function __construct($newdata) {
      echo "__construct() <br />";
      $this->data = $newdata;
    }

    public function setProp($newdata){
      if(!empty($newdata)){
        $this->data = $newdata;
      } else {
        return 1;
      }
    }

    public function getProp(){
      return $this->data;
    }

    public function __destruct() {
      echo "__destruct() <br />";
    }
  }
