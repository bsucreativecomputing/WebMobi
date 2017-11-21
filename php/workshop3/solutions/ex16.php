<?php
//Create array
$months = array (
  'January'=>31,
  'February'=>'28 days, if leap year 29',
  'March'=>31,
  'April'=>30,
  'May'=>31,
  'June'=>30,
  'July'=>31,
  'August'=>31,
  'September'=>30,
  'October'=>31,
  'November'=>30,
  'December'=>31
);

//function to print options for dropdown box
function option($str) {
    echo "<option value='$str'>" . $str . "</option>";
}
?>

<html>
<head><title>Exercise 16</title></head>
    
    <body>
        <?php
            if(!isset ($_POST['submit'])) {
        ?>
        <form method="post" action="index.php">
        <select name="month">
        
            <?php
              foreach($months as $k => $v) {
                  option($k);
              }
            ?>
        </select>
            <br>
            <input type="submit" name="submit" value="Go"/>
        </form>
        
        <?php
            } else {
                $month = $_POST['month'];
                echo "The month of $month has $months[$month] days";
            }
        ?>
        
    </body>
</html>