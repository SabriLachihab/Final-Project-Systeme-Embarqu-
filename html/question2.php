
<form action="index1.php" method="GET">
    SET ON/OFF THE LED ON GPIO 24
    <p></p>
    <input type="submit" value="0" name="value">
    <input type="submit" value="1" name="value">
    <input type="hidden" value="24" name="Gpio">
</form>

<?php 
   if (isset($_POST["value"]))
   {
       $_GET['value'] = $_POST["value"];
       $_GET['Gpio'] = $_POST["Gpio"];
   }
?>