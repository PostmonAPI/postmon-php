<?php

namespace Postmon;

class ClinentTest extends \PHPUnit_Framework_TestCase
{
    /**
    * @test
    */ 
    public function deveriaRetornarNull() 
    {
        $c = new ClientReturningNull;
        $endereco = $c->buscarCEP("36037000");

        $this->assertNull($endereco);
    }

    /** 
    * @test
    */ 
    public function deveriaRetornarCepValido()
    {
        $cep = "36037000";
        $c = new ClientReturningAddress;
        $endereco = $c->buscarCEP($cep);

        $this->assertNotNull($endereco);
        $this->assertTrue($endereco instanceof \Postmon\Entity\Endereco);
        $this->assertEquals($cep, $endereco->cep);
    }

}

class ClientReturningNull extends \Postmon\Client 
{
    protected function get($uriRelative)
    {
        return array();
    }
}

class ClientReturningAddress extends \Postmon\Client 
{
    protected function get($uriRelative)
    {
        return array(
            "cep"  => "36037000",
            "estado"  => "MG",
            "complemento" => "até 2999/3000",
            "bairro" => "São Pedro",
            "cidade" => "Juiz de Fora",
            "logradouro" => "Avenida Presidente Costa e Silva",
            "estado_info" => array(
                "area_km2" => "586.522,122",
                "codigo_ibge" => "31",
                "nome" => "Minas Gerais"
            ),
            "cep" => "36037000",
            "cidade_info" => array(
            "area_km2" => "1435,664",
            "codigo_ibge" => "3136702"
            ),
        );
    }
}