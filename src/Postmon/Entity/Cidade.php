<?php

namespace Postmon\Entity;

class Cidade 
{
    public $nome; 

    public $areaKm2;

    public $codigoIbge;

    public function __construct($nome, $areaKm2 = null, $codigoIbge = null)
    {
        $this->nome = $nome;
        $this->areaKm2 = $areaKm2;
        $this->codigoIbge = $codigoIbge;
    }

    public function __toString()
    {
        return $this->nome;
    }
}