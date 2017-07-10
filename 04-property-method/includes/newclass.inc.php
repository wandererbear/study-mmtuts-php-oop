<?php
  class NewClass{
    private $data = 'Old prop';

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
  }  
