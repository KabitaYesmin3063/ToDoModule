<?php
// Base class for a Shape
class Shape {
    // This can be extended by other shapes
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    // Placeholder for the area calculation (to be overridden by subclasses)
    public function calculateArea() {
        return 0;
    }
}

// Circle class inheriting from Shape
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        parent::__construct("Circle"); // Call the parent constructor
        $this->radius = $radius;
    }

    // Method to calculate the area of the circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class inheriting from Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        parent::__construct("Rectangle"); // Call the parent constructor
        $this->width = $width;
        $this->height = $height;
    }

    // Method to calculate the area of the rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(5); // Circle with radius 5
echo "The area of the " . $circle->name . " is: " . $circle->calculateArea() . "\n";

$rectangle = new Rectangle(4, 6); // Rectangle with width 4 and height 6
echo "The area of the " . $rectangle->name . " is: " . $rectangle->calculateArea() . "\n";
?>
