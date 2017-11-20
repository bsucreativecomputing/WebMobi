<html>
<head>
<title>PHP Exercise</title>
</head>
<body>
<?php

//Create associative array with countries as keys, cities as values.
$cities=array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);

foreach ($cities as $key => $value) { // this assigns the keys to $key and values to $value
    echo "$value is in $key.<br>";
}

?>
</body>
</html>