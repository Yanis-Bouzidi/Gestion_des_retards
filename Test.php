<?php
$json = '{
  "Siri": {
      "ServiceDelivery": {
          "ResponseTimestamp": "2023-01-14T20:43:21.864Z",
          "ProducerRef": "IVTR_HET",
          "ResponseMessageIdentifier": "IVTR_HET:ResponseMessage:d0f2a20e-308c-4345-88e1-83e8bc18b41c:LOC:",
          "GeneralMessageDelivery": [
              {
                  "ResponseTimestamp": "2023-01-14T20:43:21.865Z",
                  "Version": "2.0",
                  "Status": "true",
                  "InfoMessage": [
                      {
                          "FormatRef": "STIF-IDF",
                          "RecordedAtTime": "2022-12-12T15:45:08.188Z",
                          "ItemIdentifier": "RATP-SIV:Item::MSG.IVC.4023779067181503019.1:LOC",
                          "InfoMessageIdentifier": {
                              "value": "RATP-SIV:InfoMessage::MSG.IVC.4023779067181503019:LOC"
                          },
                          "InfoChannelRef": {
                              "value": "Perturbation"
                          },
                          "ValidUntilTime": "2023-01-30T20:30:00.000Z",
                          "Content": {
                              "StopPointRef": [],
                              "Message": [
                                  {
                                      "MessageType": "TEXT_ONLY",
                                      "MessageText": {
                                          "value": "Du 30/01 au 03/02, du lundi au vendredi à partir de 21h30, Larrêt ne sera pas desservi à Sevran – Livry en direction de Paris en raison de travaux",
                                          "lang": "fr"
                                      }
                                  },
                                  {
                                      "MessageType": "SHORT_MESSAGE",
                                      "MessageText": {
                                          "value": "Du 30/01 au 03/02, du lundi au vendredi à partir de 21h30, Larrêt ne sera pas desservi à Sevran – Livry en direction de Paris (travaux)",
                                          "lang": "fr"
                                      }
                                  }
                              ]
                          }
                      },
                      {
                          "FormatRef": "STIF-IDF",
                          "RecordedAtTime": "2022-12-12T10:39:21.657Z",
                          "ItemIdentifier": "RATP-SIV:Item::MSG.IVC.500160237790109633.8:LOC",
                          "InfoMessageIdentifier": {
                              "value": "RATP-SIV:InfoMessage::MSG.IVC.500160237790109633:LOC"
                          },
                          "InfoChannelRef": {
                              "value": "Perturbation"
                          },
                          "ValidUntilTime": "2023-03-18T02:00:00.000Z",
                          "Content": {
                              "StopPointRef": [],
                              "Message": [
                                  {
                                      "MessageType": "TEXT_ONLY",
                                      "MessageText": {
                                          "value": "En raison de travaux, le trafic est interrompu du 12 au 30 décembre, du lundi au vendredi uniquement à partir de 22h45 entre Gare du Nord et Aéroport CDG2/Mitry-Claye. Bus de remplacement. Pour plus dinfos, consulter le Blog du RER B.",
                                          "lang": "fr"
                                      }
                                  },
                                  {
                                      "MessageType": "SHORT_MESSAGE",
                                      "MessageText": {
                                          "value": "Jusquau 17/03, du lundi au vendredi à partir de 22h45, Le trafic est interrompu entre Gare du Nord et Aéroport CDG2/Mitry-Claye (travaux)\nBus de remplacement.",
                                          "lang": "fr"
                                      }
                                  }
                              ]
                          }
                      }
                  ]
              }
          ]
      }
  }
}'; // remplacer par le contenu de votre fichier JSON

$data = json_decode($json, true);

$messageTexts = array();
foreach ($data['Siri']['ServiceDelivery']['GeneralMessageDelivery'] as $generalMessage) {
    foreach ($generalMessage['InfoMessage'] as $infoMessage) {
        foreach ($infoMessage['Content']['Message'] as $message) {
            $messageTexts[] = $message['MessageText']['value'];
        }
    }
}

// foreach ($messageTexts as $text) {
//     echo $text . "<br><br>";
// }