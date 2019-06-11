<?php

class USer
{
    public static $name = "Marcus";
    public static $surname = "Camby";
    public static function addUser($name, $surname)
    {
        self::$name = $name;
        self::$surname = $surname;
    }
}
/* OVO NE RADI S keyword STATIC
$object = new User();
$object->addUser("Alexander", "der Grosse");
echo $object->name;
*/
User::addUSer("Alexander", "der Grosse");
# echo User::$name;