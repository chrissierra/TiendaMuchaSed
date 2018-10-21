<?php

use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
use Freshwork\Transbank\RedirectorHelper;

include 'vendor/autoload.php';

//Get a certificationBag with certificates and private key of WebpayNormal for integration environment.
$bag = CertificationBagFactory::integrationWebpayNormal();

$plus = TransbankServiceFactory::normal($bag);

//For normal transactions, you can just add one TransactionDetail
//Para transacciones normales, solo se puede añadir una linea de detalle de transacción.
$plus->addTransactionDetail(10000, 'Orden824201'); //Amount and BuyOrder

$response = $plus->initTransaction('https://muchased.cl/response', 'https://muchased.cl/gracias');

//echo RedirectorHelper::redirectHTML($response->url, $response->token);
