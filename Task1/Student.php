<?php
    require_once("Person.php");


    class Student extends Person{
        protected $studentId;

        public function __construct($name, $age, $email, $Id){
            parent::__construct($name, $age, $email);
            $this->is_valid_Id($Id);
            
        }

        private function is_valid_id($Id){
            if (!is_numeric($Id)) {
                echo "Invalid ID";
                return false;
            }
            $this->studentId = $Id;
            return true;
        }

        public function enroll($name_of_course){
            echo $this->name . " has enrolled in " . $name_of_course;
        }
    }

    
    $student = new Student("Ahmed",22,"a@.com",12);
    echo $student->introduce();
    echo "<br>";
    echo $student->enroll("Math 101");




?>