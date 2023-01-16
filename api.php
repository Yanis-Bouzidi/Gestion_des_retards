<?php

function getInfoTrafic($lineRef) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://prim.iledefrance-mobilites.fr/marketplace/general-message?LineRef=' . $lineRef . '&InfoChannelRef=Perturbation',
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
    $infoTrafic = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($infoTrafic, true);
    $infoTrafic = array();
    foreach ($data['Siri']['ServiceDelivery']['GeneralMessageDelivery'] as $generalMessage) {
        foreach ($generalMessage['InfoMessage'] as $infoMessage) {
            foreach ($infoMessage['Content']['Message'] as $message) {
                $infoTrafic[] = $message['MessageText']['value'];
            }
        }
    }
    return $infoTrafic;
}

$infoTraficA = getInfoTrafic('STIF:Line::C01742:');
$infoTraficB = getInfoTrafic('STIF:Line::C01743:');
$infoTraficC = getInfoTrafic('STIF:Line::C01727:');
$infoTraficD = getInfoTrafic('STIF:Line::C01728:');
$infoTraficE = getInfoTrafic('STIF:Line::C01729:');
$infoTrafic1 = getInfoTrafic('STIF:Line::C01371:');
$infoTrafic2 = getInfoTrafic('STIF:Line::C01372:');
$infoTrafic3 = getInfoTrafic('STIF:Line::C01373:');
$infoTrafic3bis = getInfoTrafic('STIF:Line::C01386:');
$infoTrafic4 = getInfoTrafic('STIF:Line::C01374:');
$infoTrafic5 = getInfoTrafic('STIF:Line::C01375:');
$infoTrafic6 = getInfoTrafic('STIF:Line::C01376:');
$infoTrafic7 = getInfoTrafic('STIF:Line::C01377:');
$infoTrafic7bis = getInfoTrafic('STIF:Line::C01387:');
$infoTrafic8 = getInfoTrafic('STIF:Line::C01378:');
$infoTrafic9 = getInfoTrafic('STIF:Line::C01379:');
$infoTrafic10 = getInfoTrafic('STIF:Line::C01380:');
$infoTrafic11 = getInfoTrafic('STIF:Line::C01381:');
$infoTrafic12 = getInfoTrafic('STIF:Line::C01382:');
$infoTrafic13 = getInfoTrafic('STIF:Line::C01383:');
$infoTrafic14 = getInfoTrafic('STIF:Line::C01384:');