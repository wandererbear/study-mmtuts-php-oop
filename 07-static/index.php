<?php
  class NewClass{
    // สังเกตุพวก $ และ self และ :: ให้ดี
    // เรียกอีกอย่างว่า Class properties เรียกผ่าน :: เท่านั้น
    public static $staticProp = 0;

    // static prop ต้องเรียกผ่าน static method เท่านั้น
    public static function staticMethod() {
      return ++self::$staticProp; // ต้องมี $
    }

  }

  $obj = new NewClass;
  echo NewClass::$staticProp; // ต้องมี $
  echo $obj::$staticProp; // ต้องมี $
  echo $obj::staticMethod(); //ต้องไม่มี $
