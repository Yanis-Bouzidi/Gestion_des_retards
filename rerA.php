<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://prim.iledefrance-mobilites.fr/marketplace/general-message?LineRef=STIF:Line::C01742:&InfoChannelRef=Perturbation',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'apiKey: vWG56kEFTUrKkkUXz3iHPAFhvuo4Fmc8',
    'Cookie: TS01ee4ccc=017bb29cd4110ef30c00775f876a14b82fc3f8bce996a471ac368075d10b67a86a1b5a87c9130419e38a3aaae7e9713e39f205552a54cde55cc01ed5fba02ddb4456d138436b2f4db60b2c04ea580ee0c654118d60'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, true);
$Message = $data['Siri']['ServiceDelivery']['GeneralMessageDelivery'][0]['InfoMessage'];
echo $Message;
