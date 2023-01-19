<?php
namespace Arafat\OddEven;

class ClassName {
    public $number;
  
    function __construct($number) {
      $this->number = $number;
    }

    public function check() {
        if(($this->number / 2) === 1){
            return true;
        }else{
            return false;
        }
    }
}