<?php

/**
 * Envolva suas collections em classes
 */

// A lógica fica fora, o que pode trazer problemas futuros
foreach ($students as $student) {
    if ($student->isGoldAccount()) {
        $student->addBonus(50);
    }
}

// Recomendado criar uma collection
class StudentCollection
{
    private array $students = [];

    public function addStudent(array $student): void
    {
        //Adiciona novas estudantes no array
        $this->students[] = $student;
    }

    public function isGoldAccount(string $nameStudent): void
    { 
        //Percorre o array e verifica se o $nameStudent é uma conta gold
    }

    public function count(): void
    {
        //conta quantos estudantes tem no array
    }

    public function addBonus(float $value, array $student): void
    {
        //Adiciona um bonus na conta do student
    }

    public function filterAccountGold(): void
    {
        // retorna todos os estudantes Gold
    }
}

$students = new StudentCollection;

$students->addStudent(["Alex", 28, "Sistemas para Internet"]);
$students->isGoldAccount("Alex");
