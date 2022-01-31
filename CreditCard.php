<?php

Trait CreditCard{
    protected $number;

    protected $cvv;

    protected $expiration_date;

    public function __construct($_number, $_cvv, $_expiration_date){
        $this->number = $_number;
        $this->cvv = $_cvv;
        $this->expiration_date = $_expiration_date;
    }
}

?>