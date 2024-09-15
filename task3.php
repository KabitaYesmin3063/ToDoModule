<?php
class Employee {
    // Private properties to encapsulate sensitive data
    private $name;
    private $position;
    private $salary;

    // Constructor to initialize the employee data
    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->setSalary($salary); // Use setter to ensure salary is set securely
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Getter for position
    public function getPosition() {
        return $this->position;
    }

    // Getter for salary
    public function getSalary() {
        return $this->salary;
    }

    // Setter for salary with validation (example: salary must be positive)
    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary must be a positive value.");
        }
    }

    // Method to display employee details
    public function displayEmployeeDetails() {
        echo "Name: " . $this->getName() . "\n";
        echo "Position: " . $this->getPosition() . "\n";
        echo "Salary: $" . number_format($this->getSalary(), 2) . "\n";
    }
}

// Example usage:
try {
    // Create an Employee object
    $employee = new Employee("John Doe", "Software Engineer", 70000);
    
    // Display employee details
    $employee->displayEmployeeDetails();

    // Securely set a new salary
    $employee->setSalary(75000);
    echo "\nUpdated Employee Details:\n";
    $employee->displayEmployeeDetails();

    // Trying to set an invalid salary (negative value)
    // Uncomment below to see the exception handling in action
    // $employee->setSalary(-1000); // This will throw an exception

} catch (Exception $e) {
    // Catch and display the exception message
    echo "Error: " . $e->getMessage();
}
?>
