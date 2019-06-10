<?php

class User
{
    private $name;
    private $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        # dependency injection
    }
    # getter
    public function getName()
    {
        return $this->name;
    }
    # getter
    public function getSurname()
    {
        return $this->surname;
    }
}

$user = new User('Marcus', 'Marulus');
echo $user->getName();