<?php

class Books
{
    # member variables or object attributes /properties/
    private $price;
    private $title;
    # member functions or methods
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        echo $this->price . "<br>";
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        echo $this->title . "<br>";
    }
}
# Instantiating objects
$maths = new Books();
$physics = new Books();
$history = new Books();

$physics->setTitle('High School Physics 1');
$maths->setTitle('High School Algebra 1');
$history->setTitle('High School World History 1');

$physics->setPrice(100);
$maths->setPrice(90);
$history->setPrice(120);

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