<?php

namespace Postmon;

class Client
{

    const BASE_URL = 'http://api.postmon.com.br/v1';

    public function buscarCEP($cep)
    {
        $response = $this->get(sprintf("/cep/%s", $cep));
        if (!($response)) {
            return null;
        }
        var_dump($response);

        return new \Postmon\Entity\Endereco($response);
    }

    private function get($uriRelative)
    {
        $url = sprintf("%s%s", static::BASE_URL, $uriRelative);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $r = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($r, true);

        return (json_last_error() == JSON_ERROR_NONE) ? $response, array()
    }
}