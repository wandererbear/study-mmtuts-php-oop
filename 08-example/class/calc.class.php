<?php
  class Calc {
    public $num1;
    public $num2;
    public $cal;
    public $result;

    public function __construct($num1, $num2, $cal) {
      $this->num1 = $num1;
      $this->num2 = $num2;
      $this->cal = $cal;
    }

    public function calcMethod() {
      switch ($this->cal) {
        case 'add':
          $this->result = $this->num1 + $this->num2;
          break;
        case 'sub':
          $this->result = $this->num1 - $this->num2;
          break;
        case 'mul':
          $this->result = $this->num1 * $this->num2;
          break;
        default:
          $this->result = "Error";
          break;
      }
      return $this->result;
    }
  }
