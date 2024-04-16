<?php
// No 4
class Car {
    public $brand;

    public function startEngine() {
        echo "Engine Started!";
    }
}

$car1 = new Car();
$car1 -> brand = "Toyota";

$car2 = new Car();
$car2 -> brand = "Honda";

$car1->startEngine();
echo $car2->brand;

echo "<br>";

//No 6
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name." is eating.<br>";
    }

    public function sleep() {
        echo $this->name." is sleeping.<br>";
    }
}

class Cat extends Animal {
    public function meow() {
        echo $this->name." says meow! :3 <br>";
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name." says bark! :< <br>";
    }
}

$cat = new Cat("Neko");
$dog = new Dog("Doggie");

$cat -> eat();
$dog -> eat();

$cat -> sleep();
$dog -> sleep();

//No 6


// No -
class Car2 {
    private $brand;
    public function __construct($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function __destruct() {
        echo "The car is destroyed. <br>";
    }
}

$car = new Car2("Toyota");
echo "Brand: " . $car->getBrand() . "<br>";
?>
