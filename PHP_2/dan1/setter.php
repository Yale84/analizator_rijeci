<?php

class User
{
    private $name;
    private $surname;

    # getter
    public function getName()
    {
        return $this->name;
    }
    # setter
    public function setName($name)
    {
        $this->name = $name;
    }
    
    # getter
    public function getSurname()
    {
        return $this->surname;
    }
    # setter
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
}

$user = new User();
$user->setName('Ivan');
$user->setSurname('Gundulić');
echo $user->getName().' '.$user->getSurname();