<?php
require_once "IShape.php";
class Rectangle implements IShape
{
    protected $width;
    protected $height;
    protected $name;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function perimeter()
    {
        return ($this->width + $this->height) * 2;
    }
    public function acreage()
    {
        return $this->width * $this->height;
    }
}
