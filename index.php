<?php
    include "Person.php";

    $man = new Person("Jannie");

    $man->walk();
    $man->greet();

    unset($man);
    $man2 = new Person("Winnie");

    $man2->walk();
    $man2->greet();
?>