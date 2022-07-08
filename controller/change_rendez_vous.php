<?php

function send_message(&$RDV){
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-public.ekotech.cm/messages",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "username=Leundji&password=Leundji@2020&msisdn=00237657533993,00237673485408&msg=Rendez-vous%20pris%20par%20".$RDV['noms']."%20le%20".$RDV['jour']."%20à%20".$RDV['heure']."&sender=CM-Estuaire",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  return "cURL Error #:" . $err;
} else {
  return $response;
}
}