<?php


class Rectangle
{
    public $width;
    public $height;

    function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function get_Area(){
        return $this->height * $this->width;
    }

    public function get_Perimeter(){
        return ($this->width + $this->height) * 2;
    }

    public function display(){
        return 'Rectangle{' . 'width='.$this->width. ', height ='. $this->height.' }';
    }
}