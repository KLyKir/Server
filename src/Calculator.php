<?php

class Calculator
{

    public function __construct(public int|float|string $Number = 0){

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
        if($Number != 0) {
            $this->Number = $this->Number / $Number;
            return $this->Number;
        }
        else {
            $this->Number = 0;
            return "No division on zero";
        }
    }
}