<?php
  include_once('./class/calc.class.php');
  $num1 = $_REQUEST['num1'];
  $num2 = $_REQUEST['num2'];
  $cal = $_REQUEST['cal'];

  $calculator = new Calc($num1, $num2, $cal);
  echo $calculator->calcMethod();
