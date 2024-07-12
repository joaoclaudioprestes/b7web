<?php
// Array Range
$array_range = range("a", "z", 2); // 1,2,3,4,5,6,7,8,9,10

foreach ($array_range as $value) {
  echo $value;
}

echo "<br>";

// Key_exists
$array_key_exists = [
  "name" => "John",
  "age" => 25,
  "city" => "New York"
];

if (key_exists("age", $array_key_exists)) {
  echo "Key exists";
  echo "<br>";
  echo "A idade é: " . $array_key_exists["age"];
} else {
  echo "Key does not exist";
}


echo "<br>";

// Array Keys e Array Values

$keys = array_keys($array_key_exists);

foreach ($keys as $key) {
  echo $key;
  echo "<br>";
}

$values = array_values($array_key_exists);
foreach ($values as $value) {
  echo $value;
  echo "<br>";
}