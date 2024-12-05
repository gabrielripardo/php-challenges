<?php

class BirthDate
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
    public function getAge()
    {
        $dob = new DateTime($this->dob);
        $today = new DateTime();
        return $today->diff($dob)->days;
    }
    public function compareAge($secondDob)
    {
        $dob = new DateTime($this->dob);
        $secondDob = new DateTime($secondDob);
        return $secondDob->diff($dob)->days;
    }
}

$gabriela = new BirthDate("Gabriela", "1998-05-07");
$gabriel = new BirthDate("Gabriel", "1997-04-06");

echo $gabriela->getName()."<br/>".$gabriela->getAge()."<br/>";
echo $gabriel->getName()."<br/>".$gabriel->getAge()."<br/>";
echo $gabriel->getName()." viveu ".$gabriel->compareAge("1998-05-07"). " dias a mais <br/>";

