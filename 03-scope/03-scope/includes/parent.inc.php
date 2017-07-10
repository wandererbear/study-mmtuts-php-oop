<?php
  class ParentClass{
    public $name = "Hey There!";
    protected $nickname = "Teddy";
    private $money = "1,000,000";

    public function getMoney(){
      return $this->money;
    }
  }
