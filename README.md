Postmon-php [![Build Status](https://travis-ci.org/PostmonAPI/postmon-php.svg)](https://travis-ci.org/PostmonAPI/postmon-php)
==============

PHP wrapper for Postmon API

Utilização
-----------

### Instalação:

`composer install`

### Uso:

```php
<?php

$client = new \Postmon\Client;
$endereco = $client->buscarCEP("36037000");

var_dump($endereco);

```
