<?php

    require_once("Student.php");

      
    $student = new Student("Ahmed",22,"a@.com",12);
    echo $student->introduce();
    echo "<br>";
    echo $student->enroll("Math 101");


?>