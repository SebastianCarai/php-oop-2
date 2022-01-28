<?php 
class User{
    public $name;

    public $lastname;

    public $age;
    
    public $email;

    protected $discount;

    private $cart =[];

    private $money_spent = 0;

    public function __construct($_name, $_lastname, $_email){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function setDiscount(){
        if ($this->age > 60){
            $this->discount = 30;
        } else{
            $this->discount = 10;
        }
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function addToCart($product){
        $this->cart[] = $product;
        $discounted_price = $product->price - ($product->price * ($this->discount / 100));
        $this->money_spent += round($discounted_price, 1);
    }
}
?>