# RaspberryPi-SendStatusToWebserver
Bash and PHP scripts to send Raspberry Pi status to a webserver.

Raspberry Pi and Server side scripts are in separate folders.<BR>
<BR>
Raspberry Pi:<BR>
 - Add <code>SendRaspberryPiUptime.sh</code> to <code>/usr/bin</code><BR>
 - Add <code>SendRaspberryPiUptime.php</code> to <code>/var/www/html</code><BR>
<BR>
Server:<BR>

- Add <code>ReceivePiData.php</code> to a location on a server and update <code>$url</code> in <code>SendRaspberryPiUptime.php</code>
