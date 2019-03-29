
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://192.168.1.203/style.css">
  <link rel="icon" type="image/png" href="http://192.168.1.203/baby.ico"/>
  <title>
    Babyspy Monitor
  </title>

</head>

<body style="background-color:grey">

<div class="alce">
  <img id="babyimg" src="http://192.168.1.203/baby.png" width="160" height="130">
  <font id="htmltext">Κάμερα μωρού</font>
  <p>
  <img id="camerasrc" src="http://192.168.1.203/stream.mjpg" width="480" height="480">
  <p>
 
 <?php
        $tempfile= 'file:///var/www/html/temperature.txt';
        $temp = file_get_contents($tempfile);
        $humifile = 'file:///var/www/html/humidity.txt';
        $humi = file_get_contents($humifile);
        echo"<p  style = \" color:rgb(0, 255, 0);\"> Θερμοκασία : $temp °C </p>";
        echo"<p  style = \" color:rgb(0, 255, 0);\"> Υγρασία : $humi % </p>";
        fclose($temp);
        fclose($humi);
        header('Refresh: 10');

    ?>
  <p>
  
  <br>
</div>
</body>
</html>
