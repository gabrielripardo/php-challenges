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

echo compare_ages($gabriela, $gabriel);

function compare_ages(Person $p1, Person $p2): string
{
    echo 'age person1 '.$p1->getAge();
    echo 'age person2 '.$p2->getAge();
    if ($p1->getAge() > $p2->getAge()) {
        return "Person 1 is older than person 2";
    } else if ($p1->getAge() < $p2->getAge()) {
        return "Person 1 is younger than person 2";
    } else {
        return "Person 1 and person 2 are the same age";
    }
}

