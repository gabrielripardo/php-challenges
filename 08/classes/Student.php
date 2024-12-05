<?php

require_once('Person.php'); //Referencia outro arquivo PHP
class Student extends Person
{
    private float $gpa;
    private string $graduation_year;
    public function __construct($name, $dob, $gpa=0.00, $graduation_year=null){
        parent::__construct($name, $dob); //acesso ao constutor da classe pai (Person)
        $this->gpa = $gpa;
        $this->graduation_year = is_null($graduation_year) ? // usar is_null é mais limpo do que $var == null
            intval(date('Y')) : $graduation_year; //date('Y') obtém o ano atual; intvar($var) converte string para inteiro
    }

    public function getGpa(): float
    {
        return $this->gpa;
    }

    public function setGpa(float $gpa): void
    {
        $this->gpa = $gpa;
    }

    public function getGraduationYear(): string
    {
        return $this->graduation_year;
    }

    public function setGraduationYear(string $graduation_year): void
    {
        $this->graduation_year = $graduation_year;
    }

}
