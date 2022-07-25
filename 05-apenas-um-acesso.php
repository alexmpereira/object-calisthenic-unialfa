<?php

/**
 * Uma chamada de método por linha
 * Devemos sempre fazer uma chamada de método por linha
 * não se aplicando à bibliotecas que usam do padrão Method Chaining ou DSL(Domain Specific Language).
 * Method Chainging: https://nandovieira.com.br/method-chaining-e-estilo-de-codigo
 * DSL: https://pt.wikipedia.org/wiki/Linguagem_de_dom%C3%ADnio_espec%C3%ADfico
 */

 //Jeito errado
class Dog
{
  public function __construct(Breed $breed)
  {
    $this->breed = $breed;
  }
}
class Breed
{
  public function __construct(string $color)
  {
    $this->color = $color;
  }
}

$dogColor = $dog->breed->color;

// Jeito certo
class DogCorreto
{
  public function __construct(Breed $breed)
  {
    $this->breed = $breed;
  }

  public function breedColor()
  {
    return $this->breed->color;
  }
}

$dogColor = $dog->breedColor();