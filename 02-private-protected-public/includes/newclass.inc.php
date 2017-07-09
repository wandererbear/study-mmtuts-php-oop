<?php
  class NewClass{
    public $public = 'inside class | inside subclass | outside';
    protected $protected = 'inside class | inside subclass';
    private $private = 'inside class ';

    public function getPublic(){
      return $this->public;
    }
    public function getProtected(){
      return $this->protected;
    }
    public function getPrivate(){
      return $this->private;
    }
  }

  class SubClass extends NewClass{
    public function getPublic(){
      return $this->public;
    }
    public function getProtected(){
      return $this->protected;
    }
  }

  // instantiate
  $obj = new NewClass;
  echo $obj->public;
