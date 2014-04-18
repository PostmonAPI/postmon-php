<?php

namespace Postmon\Entity;

class Endereco
{
    public $cep;

    public $logradouro;

    public $bairro;

    public $estado;

    public $cidade;


    public function __construct(Array $kwArgs)
    {
        $this->cep = $kwArgs['cep'];
        $this->logradouro = $kwArgs['logradouro'];
        $this->bairro = $kwArgs['bairro'];

        $this->estado = $this->extrairEstado($kwArgs['estado'], $kwArgs['estado_info']);
        $this->cidade = $this->extrairCidade($kwArgs['cidade'], $kwArgs['cidade_info']);
    }

    private function extrairCidade($nome, Array $kwArgs)
    {
        return new Cidade($nome, $kwArgs['area_km2'], $kwArgs['codigo_ibge']);
    }

    private function extrairEstado($nome, Array $kwArgs)
    {
        return new Estado($nome, $kwArgs['nome'], $kwArgs['area_km2'], $kwArgs['codigo_ibge']);   
    }

    public function __toString()
    {
        return sprintf(
            '%s, %s - %s, %s - CEP: %s',
            $this->logradouro,
            $this->bairro,
            $this->cidade,
            $this->estado,
            $this->cep
        );
    }
}