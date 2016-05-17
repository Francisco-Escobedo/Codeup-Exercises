<?php

class Rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        $area=($this->height)*($this->width);
        return $area;
    }

    public function perimeter()
    {
        $perimeter=((($this->height)*2)+(($this->width)*2));
        return $perimeter;
    }

}

