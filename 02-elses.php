<?php

/*
* Nao use Else
*/

class Cliente
{
    private int $codigoPromocao;
    private string $nomePromocao;

    public function buscaCodigoPromocao(string $nomePromocao)
    {
        if ($this->codigoPromocao) {
            return $this->validaCodigoPromocao($nomePromocao);
        }
        
        throw new Exception('Cliente sem código de promoção');
    }

    protected function validaCodigoPromocao(string $nomePromocao)
    {
        if ($this->codigoPromocaoExpirou()) {
            return $this->buscaPromocaoExistentes($nomePromocao);
        }
        
        throw new Exception('Promoção Expirada');
    }

    protected function buscaPromocaoExistentes(string $nomePromocao)
    {
        if ($this->nomePromocao == $nomePromocao) {
            return $this->codigoPromocao;
        }
        
        throw new Exception('Promoção não existe mais');
    }

    private function codigoPromocaoExpirou()
    {
        //codigo...
    }
}