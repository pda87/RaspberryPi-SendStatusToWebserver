<?php

$piUptime =  shell_exec('uptime -p');

//Had a little trouble with the 'degrees' symbol
$piTemperature = str_replace("'", "", shell_exec('cat /TempTempFile.txt 2>&1'));

$data = array("uptime" => $piUptime, "temperature" => $piTemperature);

//Path to server side script
$url = "ReceivePiData.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$result = curl_exec($ch);

echo $result;
?>