<?php 

class Square extends Rectangle
{

    public function perimeter()
    {
        $perimeter=(($this->width)*4);
        return $perimeter;
    }

}


 ?>