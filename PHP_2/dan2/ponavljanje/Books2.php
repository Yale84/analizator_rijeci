<?php

class Books
{
    
    private $price;
    private $title;
   
    public function __construct($title, $price)
    {
        $this->price = $price;
        $this->title = $title;
    }
    public function getPrice()
    {
        echo $this->price . "<br>";
    }
    public function getTitle()
    {
        echo $this->title . "<br>";
    }
}
$maths = new Books('High School Physics 1', 100);
$physics = new Books('High School Algebra 1', 90);
$history = new Books('High School World History 1', 120);

$physics->getTitle(); # echo or print
$physics->getPrice();
$maths->getTitle();
$maths->getPrice();
$history->getTitle();
$history->getPrice();



/*
var_dump($maths);
var_dump($physics);
var_dump($history);*/