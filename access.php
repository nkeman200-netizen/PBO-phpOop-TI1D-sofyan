<?php
class Fruit {
    private $name;

    public function get_details() {
        echo "Name: " . $this->name . ".";
    }
}

$apple = new Fruit();
$apple->name = "Apple"; // Error: Cannot access private property
$apple->get_details();
?>

<?php
class Fruitt {
    public $name;

    public function get_details() {
        echo "Name: " . $this->name . ".";
    }
}

$apple = new Fruitt();
$apple->name = "Apple"; // Can be accessed directly
$apple->get_details();
?>

<?php
class Fruittt {
    protected $name;

    public function setType($name) {
        $this->name = $name;
    }
}

    class Applee extends Fruittt {
    public function getType() {
        echo "Name: " . $this->name . ".";
    }
}

$apple = new Applee();
$apple->setType("Apple");
//echo $apple->name; // Error: Cannot access protected property
$apple->getType(); // Output: Name: Apple.
?>