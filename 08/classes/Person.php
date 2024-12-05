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