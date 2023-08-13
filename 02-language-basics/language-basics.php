<?php
declare(strict_types=1);
## Statements

$a = 1;

if ($a == 1) {
    echo "yes\n";
}

## Constants

define("NAME", "Craig");
echo NAME;

// defined at comp time
// supposedly faster
const a = "asd\n";
echo a;

## Data Types

// Creating an array
// (arrays in PHP can be maps)
$person = array("Craig", "Paul");
echo $person[0];

$map = array(
    "Craig" => "First"
);
echo $map["Craig"];

// Short hand array/map
$shortMap = [
    "Craig" => "ShortMap"
];
echo $shortMap["Craig"];

// Foreach loop
foreach ($shortMap as $key => $value) {
   echo "{$key}, {$value}";
};

// Objects / Classes

class Person {
    public string $name = "";

    function name (string $newname = null): string {
        if (!is_null($newname)) {
            $this->name = $newname;
        }

        return $this->name;
    }
}

$ed = new Person;

$ed->name('Edison');

echo $ed->name;

// variable variables

$foo = "bar";
$$foo = "baz";

// pointers

function &returnReference(int &$value): int {
    // Modify $value in some way
    $value += 10;
    return $value;
}

$originalValue = 5;
$reference = &returnReference($originalValue);

echo $originalValue;  // Output: 15

?>