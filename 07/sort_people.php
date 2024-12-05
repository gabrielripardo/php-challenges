<?php

class Person
{
    private $name;
    private $dob;

    function __construct($name, $dob)
    {
        $this->name = $name;
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob): void
    {
        $this->dob = $dob;
    }

    public function getAge(): int
    {
        $dob = new DateTime($this->dob);
        $today = new DateTime();
        return $today->diff($dob)->days;
    }
}

$gabriela = new Person("Gabriela", "1998-05-07");
$gabriel = new Person("Gabriel", "1997-04-06");
$raquel = new Person("Raquel", "1994-11-13");
$manu = new Person("Manuela", "1997-05-07");
$marlucia = new Person("Marlúcia", "1979-09-20");
$ricardo = new Person("Ricardo", "1978-12-09");
$persons = array($gabriela, $gabriel, $raquel, $manu, $marlucia, $ricardo);
function compare_ages(Person $p1, Person $p2)
{
    if($p1->getAge() == $p2->getAge()) {
        return 0;
    }

    return $p1->getAge() > $p2->getAge() ? 1 : -1;
}

function print_array($persons): void
{
    echo '<pre>';
    var_dump($persons);
    echo '</pre>';
}

usort($persons, 'compare_ages');

print_array($persons);


