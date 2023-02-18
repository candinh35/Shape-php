<?php
require_once 'Rectangle.php';
class Parallelogram extends Rectangle 
{
    private $length;
    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        parent::__construct($width, $height);
    }
    // overriding lại method của Rectangle
    public function acreage()
    {
        return ($this->length * $this->height);
    }
}
