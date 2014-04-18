Postmon-php
==============

PHP wrapper to Postmon API

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
