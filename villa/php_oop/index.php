<?php
/*
// define a class // access modifiers (public, private, protected)
class User  
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // __GET Magic method
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    // __SET Magic method
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

    public function __destruct()
    {
        echo "Destructor works!";
    }

    public function myAge()
    {
        return "My age is " . $this->age;
    }
}

class Admin extends User
{
    public $level;
}

// __GET __SET
$user1 = new User("Marco", 36);
echo $user1->__get('name');
echo "<br>";

$user1->__set('age', 24);
echo $user1->__get('age');





$user = new User("Marco", 34);
$user->name = "Marco";
$user->age = "test@test.com";

echo $user->name . " " . $user->age;
echo "<br>";

$admin = new Admin('Alex', 36);
$admin->name = "Alex";
$admin->age = "prova@prova.it";
$admin->level = 5;

echo $admin->name . " " . $admin->age . " " . $admin->level;
echo "<br>";

class Usero 
{
    private static $nextId = 0;
    public $myId;

    public static function printId()
    {
        return "Usero id is: " .self::$nextId;
    }
}

$usero = new Usero();
$usero->myId = 10;
echo $usero->myId;

echo Usero::printId();

*/

