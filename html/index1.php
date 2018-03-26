<?php
 echo '<form method="get" action="index1.php">';
 echo 'GPIO  ';
 echo '<input type="text" name="Gpio"/>';
 echo '<p></p>';
 echo 'Value ';
 echo '<input type="text" name="value"/>';
 echo '<p></p>';
 echo '<button type="submit" value="Submit">Submit</button>';
 echo '<p></p>';
 echo 'The GPIO ' . htmlspecialchars($_GET["Gpio"]) . ' have the value ' . htmlspecialchars($_GET["value"]);
?>