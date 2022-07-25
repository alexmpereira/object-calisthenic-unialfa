<?php

/**
 * Não tenha classes com mais de duas variáveis de instância;
 * Se a classe tem muitos atributos, veja a possibilidade de isolar algumas
 * em novas classes que fazem sentido:
 */

 //jeito errado
class StudentErrado
{
  public string $name;
  public string $email;
  public string $phone;
  public $address;
  public $city;
  public $country;
  public $courses;
  public $notes;
}

$student = new StudentErrado(
  "Testte",
  "jskdlfjdsk@gmail.com",
  "+74817489173",
  "...",
  "...",
  "...",
  "...",
  "..."
);

// separando do jeito certo
class StudentCorreto
{
  public Person $person;
  public Address $address;
  public Courses $courses;
}

class Person
{

}

class Address
{

}

class Courses 
{

}

$person = new Person(
    "Teste",
    "teste@gmail.com",
    "+3784267382647832"
);
$address = new Address("Lorem Ipsum dolor", "..", "..");
$courses = new Courses([], []);
$student = new StudentCorreto($person, $address, $courses);