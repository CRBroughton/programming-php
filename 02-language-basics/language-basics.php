<?php
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
    public $name = "";

    function name ($newname = null) {
        if (!is_null($newname)) {
            $this->name = $newname;
        }

        return $this->name;
    }
}

$ed = new Person;

$ed->name('Edison');

echo $ed->name;
?>