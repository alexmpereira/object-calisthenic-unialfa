<?php

/**
 * Nao Abrevie
 * Evite fazer abreviacoes em variaveis, funcoes etc. 
 * Deixe sempre explicito o significado
 * Se voce usa uma variavel ou funcao em muitos lugares
 * e precisa abreviar, talvez precisa refatorar, isolar essa camada em uma classe
 * 
 */

 class Banco
 {
    private array $db; //forma errada

    public function checaSeInsereOuAtualiza()
    {
        //codigo... Método pode está fazendo duas  responsavilidade
        //Além de deixar o nome da funcao grande
    }
 }

 class BancoCorreta
 {
    private array $conexao;
 }