<?php
/* encapsulation - modifikatori pristupa: private, public, protected
private samo unutar klase se pristupa svojstvima
protected može se pristupiti i unutar klase koja naslijeđuje kalsu 
KLASA JE NACRT OBJEKTA*/ 
class Human 
{
    private $age;
    protected $height;
    public $sex;
    
    public function drinking()
    {

    }

    private function running()
    {

    }
}

class Customer extends Human
{
    private $customer_id;
    private $payment_data;
    # ova klasa naslijeđuje klasu Human /inheritance/
}
###############################################################################
class Car 
{
    protected $colour;
    protected $door_number;
    protected $power;
    protected $speed;
    protected $price;

    public function transport()
    {

    }
}

class SUV extends Car
{
    protected $capacity;
}

class FamilyCar extends Car
{

}