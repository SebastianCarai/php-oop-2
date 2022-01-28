<?php
class UserPremium extends User{
    public $premium_level;

    // Override
    public function setDiscount(){
        if ($this->premium_level == 1){
            $this->discount = 50;
        } elseif ($this->premium_level == 2){
            $this->discount = 65;
        }
    }
}
?>