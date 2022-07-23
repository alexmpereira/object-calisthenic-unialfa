<?php

/*
* Um nível de indentacao por método
*/

class Cliente
{
    private int $codigoPromocao;

    public function buscaCodigoPromocao(string $nomePromocao)
    {
        // 1.
        if ($this->codigoPromocao) {
            // 2.
            if ($this->codigoPromocaoExpirou()) {
                // 3.
                if ($this->nomePromocao == $nomePromocao) {
                    return $this->codigoPromocao;
                } else {
                    throw new Exception('Promoção não existe mais');
                }
            } else {
                throw new Exception('Promoção Expirada');
            }      
        } else {
            throw new Exception('Cliente sem código de promoção');
        }
    }

    public function codigoPromocaoExpirou()
    {
        //codigo...
    }
}

class ClienteResolved
{
    private int $codigoPromocao;
    private string $nomePromocao;

    public function buscaCodigoPromocao(string $nomePromocao)
    {
        if ($this->codigoPromocao) {
            return $this->validaCodigoPromocao($nomePromocao);
        } else {
            throw new Exception('Cliente sem código de promoção');
        }
    }

    protected function validaCodigoPromocao(string $nomePromocao)
    {
        if ($this->codigoPromocaoExpirou()) {
            return $this->buscaPromocaoExistentes($nomePromocao);
        } else {
            throw new Exception('Promoção Expirada');
        }    
    }

    protected function buscaPromocaoExistentes(string $nomePromocao)
    {
        if ($this->nomePromocao == $nomePromocao) {
            return $this->codigoPromocao;
        } else {
            throw new Exception('Promoção não existe mais');
        }
    }

    private function codigoPromocaoExpirou()
    {
        //codigo...
    }
}
