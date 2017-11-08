<html>
<head>
<title>PHP Exercise</title>
</head>
<body>
<?php

$currMonth = date('F', time());

if ($currMonth == 'August'){
    echo "It's August, so it's really hot.<br>";
} else {
    echo "Not August, so at least not in the peak of the heat.<br>";
}

?>
</body>
</html>