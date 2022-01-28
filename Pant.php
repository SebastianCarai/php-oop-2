<?php 
class Pant{
    public $price;

    public $number_of_pockets=3;

    public $color;

    public $size;

    public $brand;

    public $material = 'Cotton';

    public function __construct($_price, $_size){
        $this->price = $_price . ' €';
        $this->size = $_size;
    }


}
?>