<?php
require_once('Student.php');

function average_gpa_students($students): float{
    $sum = 0.00;
    $qtd = 0;
    foreach($students as $student){
        if($student->getGpa() > 0){
            $qtd++;
            $sum += $student->getGpa();
        }
    }
    return $sum / $qtd;
}


$peter = new Student("Peter", "1994-06-01");
$bianca = new Student("Bianca", "2012-08-08", 5, "2025");
$sania = new Student("Sânia", "1979-09-02", 10, "2026");
$students = array($peter, $bianca, $sania);

echo $peter->getName(). "vai se graduar em " .$peter->getGraduationYear() . PHP_EOL; //PHP_EOL é o equivalente ao <br/> ou (contrabarra + n)
echo "A turma possui média de ". average_gpa_students($students);