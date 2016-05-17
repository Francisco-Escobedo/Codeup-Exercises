<?php

class Rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    protected function setWidth($width)
    {
        $this->width = $width;
    }

    protected function setHeight($height)
    {
        $this->height = $height;
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

