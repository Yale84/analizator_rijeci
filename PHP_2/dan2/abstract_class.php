<?php

abstract class Page
{
    abstract protected function getHTML();
    public function printOut()
    {
        echo $this->getHTML();
    }
}
class Home extends Page
{
    public function getHTML()
    {
        return "<h1>Abstract class</h1>";
    }
}  
$object = new Home();
$object->printOUT();