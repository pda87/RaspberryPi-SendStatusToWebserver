#!/bin/bash
touch /TempTempFile.txt
echo $(/opt/vc/bin/vcgencmd measure_temp) > /TempTempFile.txt
wget "127.0.0.1/SendRaspberryPiUptime.php"
rm /TempTempFile.txt