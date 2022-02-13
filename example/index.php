<?php

require_once __DIR__ . '/../dist/vendor/autoload.php';

$apiClient = new \AlbertVision\Econt\ApiClient(
    new \GuzzleHttp\Client([
        'base_uri' => 'https://demo.econt.com/ee/services/'
    ]),
    new \AlbertVision\Econt\HeaderSelector()
);

$apiClient
    ->getAuth('BasicAuth')
    ->setUsername('iasp-dev')
    ->setPassword('iasp-dev');

$req1 = new \AlbertVision\Econt\Request('POST', 'Nomenclatures/NomenclaturesService.getCities.json', [], json_encode([
    'countryCode' => 'bgr'
]));

$nomenclatures = new \AlbertVision\Econt\Api\Nomenclatures($apiClient);
$req2 = $nomenclatures->getCitiesRequest('BGR');

var_dump($nomenclatures->getQuarters(72));
