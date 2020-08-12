<?php
    include "Person.php";
    include "Engineer.php";

    $man = new Person("Jannie");

    // $man->walk();
    // $man->greet();

    // unset($man);
    // $man2 = new Person("Winnie");

    // $man2->walk();
    // $man2->greet();

    // echo $man->dob;
    // echo "<br>";
    // $man->dob = "1994-09-01";
    // echo $man->dob;
    // echo "<br>";

    // echo $man->getDOB();
    // echo $man->setDOB("1994-09-01");
    // echo $man->getDOB();

    $engineer = new Engineer("Mary");

    $engineer->showName();
?>