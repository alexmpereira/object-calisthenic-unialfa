<?php

/**
 * Envolva seus tipos primitivos (Value Objects)
 * Todo valor que tiver comportamento deve ser feito o tipo primitivo dele.
 * Porém, deve tomar cuidado para nao abusar em excesso o uso dele
 * Um exemplo muito usado é o de e-mail, pois precisamos certificar que
 * o e-mail é valido, precisa ser valido para ser cadastrado.
 */

class Student
{
    private string $nome;
    private Email $email;

    public function __construct(string $nome, Email $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}

class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            throw new InvalidArgumentException("E-mail Invalido");
        }

        $this->email = $email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}