<?php
require_once 'IShape.php';

class Triangle implements IShape{
    private $edgeOne;
    private $edgeTwo;
    private $edgeThree;
    public function __construct($edgeOne, $edgeTwo, $edgeThree)
    {
        $this->edgeOne = $edgeOne;
        $this->edgeTwo = $edgeTwo;
        $this->edgeThree = $edgeThree;
    }
    public function perimeter()
    {
        return ($this->edgeOne + $this->edgeTwo + $this->edgeThree);
    }
    public function acreage(): float
    {
        // tính p = (a + b + c) / 2
        $p = ($this->edgeOne + $this->edgeTwo + $this->edgeThree) / 2;
        // S = √(p * (p - a) * (p - b) * (p - c))
        $result = (sqrt($p * ($p - $this->edgeOne) * ($p - $this->edgeTwo) * ($p - $this->edgeThree)));
        // var_dump(number_format($result, 3));exit();

        return number_format($result, 3);
    }
}