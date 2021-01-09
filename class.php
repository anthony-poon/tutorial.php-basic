<?php
// This is a class, class name should be in TitleCase
class FooBar {
    // This is a private property. $foo and $bar can only be access within this class
    private $foo;
    private $bar;
    // This is a constructor. constructor will always be the first to run when we instantiate a class to a object
    public function __construct() {
        $this->foo = "This is foo";
        $this->bar = "This is bar";
    }

    // This is a method. Method is a function that can be called outside of the class.
    // Because $foo is a private property and it cannot be access outside,
    // we provide a method to set the value of $foo
    public function setFoo(string $input) {
        $this->foo = $input;
    }

    // Same with bar, but this time we set the input to upper case before storing it
    public function setBar(string $input) {
        $this->bar = strtoupper($input);
    }

    public function getFoo() {
        return $this->foo;
    }

    public function getBar() {
        return $this->bar;
    }
}

// Class a a blue print for an object. One blueprint can create may object, but each object is a unique entity that will
// not affect each others.
$foobar1 = new FooBar(); // Create 1st Object
$foobar2 = new FooBar(); // Create 2nd Object

$foobar1->setFoo("Hello");
$foobar1->setBar("World");

echo $foobar1->getFoo() . " " . $foobar1->getBar() . "\n";
echo $foobar2->getFoo() . " " . $foobar2->getBar() . "\n";