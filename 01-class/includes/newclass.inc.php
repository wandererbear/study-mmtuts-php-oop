<?php
  // ./includes/newclass.inc.php
  //ตัวพิมพ์ใหญ่
  class NewClass{
    // properties
    public $info = 'This is info.';

    // methods
  }

  // instantiate
  $obj = new NewClass;
  var_dump($obj);
  // => object(NewClass)#1 (1) { ["info"]=> string(13) "This is info." }
