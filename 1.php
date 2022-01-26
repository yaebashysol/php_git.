<?php
$url = "https://www.rbc.ru";
$curl = curl_init($url);
curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_USERAGENT, "google");
$page = curl_exec($curl);

?>