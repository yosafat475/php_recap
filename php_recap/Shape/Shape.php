<?php

class Shape{

    protected $color;

    public function __construct($color="Black"){
        $this->color=$color;  
        return .5*$this->base*$this->height; 

}
class Circle extends Shape
{
    private $radius=28;
    private $height=12;

    public function getArea()
    {
        return pi()*pow($this->radius,2);
    }
}

