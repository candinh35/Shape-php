<?php
require_once 'Rectangle.php';
class Square extends Rectangle 
{
    public function __construct($length)
    {
        parent::__construct($length, $length);
    }
}
