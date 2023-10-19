<?php

class Calculator
{
    public float $Number;

    public function __construct(){
        $this->Number = 0;
    }
    public  function adding($Number) {
        $this->Number = $this->Number + $Number;
        return $this->Number;
    }

    public function minusing($Number) {
        $this->Number = $this->Number - $Number;
        return $this->Number;
    }

    public function multiplication($Number) {
        $this->Number = $this->Number * $Number;
        return $this->Number;
    }

    public function division($Number){
        $this->Number = $this->Number / $Number;
        return $this->Number;
    }
}