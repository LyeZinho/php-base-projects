<?php

// Class definition for a simple class in PHP

class SimpleClass {
    private $property;

    public function __construct($value) {
        $this->property = $value;
    }

    public function getProperty() {
        return $this->property;
    }

    public function setProperty($value) {
        $this->property = $value;
    }

    public function display() {
        echo "Property value: " . $this->getProperty();
    }

    // Static method to create an instance of the class
    public static function create($value) {
        return new self($value);
    }

    public function __toString() {
        return "SimpleClass with property: " . $this->getProperty();
    }

    public function __clone() {
        // Custom clone logic if needed
        $this->property = "Cloned: " . $this->property;
    }

    public function __destruct() {
        echo "Destroying SimpleClass instance with property: " . $this->getProperty() . "\n";
    }
}

// Example usage
$instance = SimpleClass::create("Hello, World!");
$instance->display();
echo "</br>";
$instance->setProperty("New Value");
$instance->display();
echo "</br>";
$instanceClone = clone $instance;
$instanceClone->display();
echo "</br>";
echo $instanceClone; // Calls __toString method
echo "</br>";
// The destructor will be called automatically when the script ends or the object goes out of scope
$instance = null; // Explicitly setting to null to trigger destructor
echo "End of script.</br>";
// The destructor will be called automatically when the script ends or the object goes out of scope
$instanceClone = null; // Explicitly setting to null to trigger destructor
echo "End of script with clone.</br>";