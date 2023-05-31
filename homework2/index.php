<?php
class SHAPE
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b = null, $c = null)
    {
        $this->a = $a;  
        $this->b = $b; 
        $this->c = $c;  
    }
}

class SQUARE extends SHAPE
{
    public function perimeter()
    {
        return $this->a * 4;
    }
    public function area()
    {
        return pow($this->a, 2);
    }
}

class RECTANGLE extends SHAPE
{
    public function perimeter()
    {
        return $this->a * 2 + $this->b * 2;
    }
    public function area()
    {
        return $this->a * $this->b;
    }
}

class TRIANGLE extends SHAPE
{
    public function perimeter()
    {
        return $this->a + $this->b + $this->c;
    }
    public function area()
    {
        return ($this->a * $this->c)/2;
    }
}

$square = new SQUARE(2);
$rectangle = new RECTANGLE(5,6);
$triangle = new TRIANGLE(7,2,3);

echo "Perimeter and Area of square:"." ".$square->perimeter()." ".$square->area()."<br>";
echo "Perimeter and Area of rectangle:"." ".$rectangle->perimeter()." ".$rectangle->area()."<br>";
echo "Perimeter and Area of triangle:"." ".$triangle->perimeter()." ".$triangle->area()."<br>";



?>