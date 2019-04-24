<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" href="baby.ico"/>
  <title>
    Babyspy Monitor
  </title>
</head>

<body background="night.jpg">
<div class="alce">
  <img id="babyimg" src="baby.png" width="160" height="130">
   <p>
  <img id="camerasrc" src="http://192.168.1.52:8008/stream.mjpg" width="400" height="400">
  <p>
<center>
<table width="400">
<tr>
<td width="200"><center><p style="font-size:24;  font-weight: bold; color:yellow;">Μουσική
<td><center><p style="font-size:24;  font-weight: bold; color:yellow;">Φως
</tr>
<tr>
<td><center><form action="" method="post">
	<button type="submit" name="playsound" id="soundbtn" >Νανούρισμα</button>
    </form>
<td><center><form method="get" action="index.php">
            <input type="submit" style = "font-size: 14 pt" value="ON " name="on" id="offbtn">
            <input type="submit" style = "font-size: 14 pt" value="OFF" name="off" id="onbtn">
         </form>​​​</center>
</tr>
</table>

<?php

if(isset($_POST['playsound'])){
shell_exec('sudo omxplayer /var/www/html/sleep.mp3');

}
?>

<?php
    shell_exec("gpio -g mode 20 out");
    shell_exec("gpio -g mode 21 out");
    if(isset($_GET['off']))
        {

                        shell_exec("gpio -g write 20 0");
			shell_exec("gpio -g write 21 0");
        }
            else if(isset($_GET['on']))
            {

                        shell_exec("gpio -g write 20 1");
                        shell_exec("gpio -g write 21 1");
            }

?>

<table>
<tr>
<td width="400" bgcolor="#000018">
 <center>
<?php
        $tempfile= 'file:///var/www/html/temperature.txt';
        $temp = file_get_contents($tempfile);
        $humifile = 'file:///var/www/html/humidity.txt';
        $humi = file_get_contents($humifile);
        echo"<p  style = \" color:white;font-size:24;font-weight:bold;\"> Θερμοκρασία : $temp °C </p>";
        echo"<p  style = \" color:white;font-size:24;font-weight:bold;\"> Υγρασία : $humi % </p>";
        fclose($temp);
        fclose($humi);
        header('Refresh: 10');

    ?>
</center>
</tr>
</table>
  <p>

  <br>
</div>
</body>
</html>
