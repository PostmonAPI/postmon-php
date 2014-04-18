<?php

namespace Postmon\Entity;

class Estado 
{
    public $uf;

    public $nome; 

    public $areaKm2;

    public $codigoIbge;

    public function __construct($uf, $nome=null, $areaKm2 = null, $codigoIbge = null)
    {
        $this->uf = $uf;
        $this->nome = $nome;
        $this->areaKm2 = $areaKm2;
        $this->codigoIbge = $codigoIbge;
    }

    public function __toString()
    {
        return $this->nome;
    }
}