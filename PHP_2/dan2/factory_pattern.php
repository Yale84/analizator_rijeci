<?php
# All animals should inherit this class
abstract class AnimalAbstract
{
    protected $species;
    public function getSpecies()
    {
        return $this->species;
    }
}
class Cate extends AnimalAbstract
{
    protected $species = "cat";

}
class Dog extends AnimalAbstract
{
    protected $species = "dog";
}
# This code instatiates animal objects
class AnimalFactory
{
    public static function factory($animal)
    {
        switch ($animal) 
        {
        case "cat":
            $object = new Cat();
            break;
        case "dog":
            $object = new Dog();
            break;
        default:
            throw new Exception("Animal factory could not create the species $animal.", 400);
        }
        return $object;
    }
}
# try-catch block
try
{
$cat = AnimalFactory::factory("cat");
echo "<p>" . $cat->getSpecies() . "</p>";

$dog = AnimalFactory::factory("dog");
echo "<p>" . $dog->getSpecies() . "</p>";

$hippo = AnimalFactory::factory("hippopotamus");
# ili npr. $giraffe = AnimalFactory::factory("giraffe");
} catch(Exception $e)
{
    echo "<p>" . $e->getMessage() . "with error code: " . $e->getCode() . "</p>";
}
