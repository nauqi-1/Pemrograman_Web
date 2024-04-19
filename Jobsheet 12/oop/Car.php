<?php

// 1.1
/*class Car {
    public $brand;

    public function startEngine() {
        echo "Engine started!";
    }
}

$car1 = new Car();
$car1 -> brand = "Toyota";

$car2 = new Car();
$car2 -> brand = "Honda";

$car1 -> startEngine();
echo $car2 -> brand;*/


// 1.4
/*class Car
{
    private $model;
    private $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
}

$car = new Car("Toyota", "Blue");
echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";
$car->setColor("Red");
echo "Updated Color: " . $car->getColor() . "<br>";*/

// 1.7
class Car {
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

$car = new Car("Toyota");
echo "Brand: " . $car->getBrand() . "<br>";