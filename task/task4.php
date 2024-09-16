<?php
// Base Animal class
class Animal {
    // Method that will be overridden in subclasses
    public function makeSound() {
        return "Some generic animal sound";
    }
}

// Dog class extending Animal
class Dog extends Animal {
    // Override the makeSound method for Dog
    public function makeSound() {
        return "Woof! Woof!";
    }
}

// Cat class extending Animal
class Cat extends Animal {
    // Override the makeSound method for Cat
    public function makeSound() {
        return "Meow! Meow!";
    }
}

// Cow class extending Animal
class Cow extends Animal {
    // Override the makeSound method for Cow
    public function makeSound() {
        return "Moo! Moo!";
    }
}

// Function to demonstrate polymorphism
function makeAnimalSound(Animal $animal) {
    echo $animal->makeSound() . "\n";
}

// Example usage of polymorphism
$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

// Demonstrate polymorphism
makeAnimalSound($dog);  // Outputs: Woof! Woof!
makeAnimalSound($cat);  // Outputs: Meow! Meow!
makeAnimalSound($cow);  // Outputs: Moo! Moo!
?>
