<?php

include "static.php";
class Buyer extends User
{
    public static $buyer_id;
    public static function addBuyer($name, $surname, $id)
    {
        self::$buyer_id = $id;
        parent::addUser($name, $surname);
    }
}
Buyer::addBuyer("Alexandre", "Legrand", 1101);
echo "The name of the buyer is " . Buyer::$name.".<br>";
echo "The surname of the buyer is " . Buyer::$surname.".<br>";
echo "The id of the buyer is " . Buyer::$buyer_id.".<br>";