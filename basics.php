<?php
// PHP use $ to declare a variable

// Assigning value to a variable
$foobar = "abc";

// Pass the value from one variable to another variable
$foo = $foobar;

// Check if the variable equal to a value
// Execute the first block if true
// Otherwise execute the 2nd block
if ($foo === "abc") {
    // Print out something, \n is a newline characters.
    echo "It is abc\n";
} else {
    // Log an error
    error_log("It is not abc\n");
}

// You can also use '.' to join string together
echo "First " . "Second\n";

// Use var_dump to print out a variable in a human readable format.
// Note: This function should only be used for development purpose only
var_dump([
    "This is an array"
]);

var_dump([
    "key" => "This is an Object"
]);

// Declare a function
//
// Function is a set routine which you provide a input, and a output will be produced.
// - "isIdentical" is the function name.
// - The isIdentical accept 2 inputs, and thus the function can be called with isIdentical("1", 2);

// **   Note, the word 'string', and 'int' called a type declarations. It is optional, but when specified, the input
//      must be of the same type or otherwise an error will be thrown. It is highly recommended to provide a type declarations
//      whenever possible.
function isIdentical(string $input1, int $input2) {
    // Use '===' to check if the 2 variable is of the same value and same type.
    // So '1' === 1 will return false
    // It is highly recommended to always use === instead of ==
    return $input1 === $input2;

    // See https://www.php.net/manual/en/language.operators.comparison.php for more
}

function isEqual(string $input1, int $input2) {
    // Use '==' to check if the 2 variable is of the same value.
    // So '1' == 1 will return true
    // It is NOT recommended to use ==
    return $input1 == $input2;
}

// Use ! to invert boolean, ie turing true => false and false => true
if (!isIdentical("1", 1)) {
    echo "Is not Identical";
}

if (isEqual("1", 1)) {
    echo ".. but is equal\n";
}

// Other operators
$isLargerOrEqual = 2 >= 1;
$isLarger = 2 > 1;
$isSmallerOrEqual = 1 <= 2;
$isSmaller = 1 < 2;

// && is a AND operator. It will combine the left hand side and right hand side, and if both are true, it will return true
$isTrue = true && true;
$isFalse = true && false;
$isFalse = false && false;

// || is a OR operator. Will return true of either left hand side or right hand side is true;
$isTrue = true || true;
$isTrue = true || false;
$isTrue = false || true;
$isFalse = false || false;