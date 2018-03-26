<html>
 <head>
 <meta name="viewport" content="width=device-width" />
 <title>LED Control Sabri & Delphine Program</title>
 </head>
         <body>
         LED 24 Control Sabri & Delphine Program :
         <form method="POST">
		 <p></p>
                 <input type="submit" value="LED 24 ON & LED 23 OFF" name="on">
                 <input type="submit" value="LED 23 ON & LED 24 OFF" name="off">
                 <input type="hidden" value="0" "<?php print $counter; ?>"; />
                 <p></p>
         </form>
         <?php
         session_start();
         $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
         if(isset($_POST['on'])){
                 $int = 0;
                 $echo24on = shell_exec("gpio -g write 24 1");
                 $echo23on = shell_exec("gpio -g write 23 0");
                 echo "LED is ON and LED 23 is OFF";
         }
         else if(isset($_POST['off'])){
                 $counter = ++$_SESSION['counter'];
                 $echo24off = shell_exec("gpio -g write 24 0");
                 $echo23on = shell_exec("gpio -g write 23 1");
                 echo "LED is OFF and LED 23 is ON";
                 echo '<p></p>' ;
                 echo "The Counter number : ";
                 echo $counter;
                 while($int < 5)
                 {
                      echo '<p></p>' ;
                      $echoread23 = shell_exec("gpio -g read 23");
                      echo $echoread23;
                      sleep(0.2);
                      $int = $int + 1;
                 }
                 if($counter%2==0)
{
echo '<body style="background-color:white">';
}
else{
echo '<body style="background-color:blue">';
}
         }
         ?>
         </body>
 </html>