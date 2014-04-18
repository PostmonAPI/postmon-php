<?php

require __DIR__.'/vendor/autoload.php';

$client = new \Postmon\Client;

$r = $client->buscarCEP($argv[1]);
var_dump($r);