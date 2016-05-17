<?php 

class Square extends Rectangle
{

    private $height;

    public function __construct($height)
    {
        $this->height = $height;
    }

    public function area ()
    {
        $area=(($this->height)*($this->height));
        return $area;
    }

    public function perimeter()
    {
        $perimeter=((($this->height)*2)+(($this->height)*2));
        return $perimeter;
    }

}


 ?>