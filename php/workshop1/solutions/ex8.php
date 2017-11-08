<html>
<head>
<title>PHP Exercise</title>
</head>
<body>
<?php

$counter = 1;
while ($counter < 10){
    echo 'abc ';
    $counter++;
}

echo "<br>";

for ($x=1; $x<10; $x++){
    echo "$x ";
}
//The space inside the "" is necessary to separate the numbers.

//Generate ordered list.
echo "<ol>";
for ($x='A'; $x<'G'; $x++){
    echo "<li>Item $x</li>";
}
echo "</ol>";
//Note that letters may be used in the for loop in place of numbers.

?>
</body>
</html>