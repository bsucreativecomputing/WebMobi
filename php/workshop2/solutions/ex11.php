<html>
<head>
<title>PHP Exercise</title>
</head>
<body>
<?php

//Create array.
$cities = array(
    "Tokyo",
        "Mexico City",
        "New York City",
        "Mumbai",
        "Seoul",
        "Shanghai",
        "Lagos",
        "Buenos Aires",
        "Cairo",
        "London"
        );

//Print values of array to browser, separated by commas.
foreach($cities as $c){
    echo "$c, ";
}

//Sort array.
sort($cities);

//Print array as bulleted list.
echo "<ul>" ;
foreach($cities as $c){
echo "<li>$c</li>";
}
echo "</ul>" ;

//Add four cities to array.
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

//Sort again, and print bulleted list.
sort($cities);
echo "<ul>";

foreach($cities as $c){
    echo "<li>$c</li>";
}
echo "</ul>";

?>
</body>
</html>