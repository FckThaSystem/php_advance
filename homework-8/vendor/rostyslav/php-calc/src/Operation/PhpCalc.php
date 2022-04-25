<?php

namespace PhpCalc\Operation;

class PhpCalc
{
    protected $a;

    protected $b;

    protected $operation;

    public function __construct($a, $b, $operation){
        $this->a = $a;
        $this->b = $b;
        $this->operation = $operation;
        $this->calcResult($this->operation);
    }
    private function plus(){
        return $this->a + $this->b;
    }
    private function minus(){
        return $this->a - $this->b;
    }
    private function divide(){
        return $this->a / $this->b;
    }
    private function multiply(){
        return $this->a * $this->b;
    }
    private function calcResult($operation){
        switch ($operation){
            case '+' :
                echo $this->a . " + " . $this->b . " = " . $this->plus() . PHP_EOL;
                break;
            case '-' :
                echo $this->a . " - " . $this->b . " = " . $this->minus() . PHP_EOL;
                break;
            case '/' :
                echo $this->a . " / " . $this->b . " = " . $this->divide() . PHP_EOL;
                break;
            case '*' :
                echo $this->a . " * " . $this->b . " = " . $this->multiply() . PHP_EOL;
                break;
            default:
                break;
        }
    }
}