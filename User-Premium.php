<?php
class UserPremium extends User{
    public $premium_level;

    // Override
    // Setting the discount of a Premium user, based not on their age but about their subscription level
    public function setDiscount(){
        if ($this->premium_level == 1){
            $this->discount = 50;
        } elseif ($this->premium_level == 2){
            $this->discount = 65;
        }
    }

    public function getDiscount(){
        return $this->discount;
    }
}
?>