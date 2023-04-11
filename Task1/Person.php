<?php 

    class Person{

        protected $name;
        protected $age;
        protected $email;

        function __construct($name, $age, $email){
            $this->is_valid_name($name);
            $this->is_valid_age($age);
            $this->is_valid_email($email);

        }

        public function introduce(){
            if ($this->name && $this->age) return "My name is " .$this->name. ", and I'm " . $this->age . " years old";
            return "Please enter the correct name and age";
        }

        protected function is_valid_name($name){
            for ($i = 0; $i < strlen($name); $i++){
                $char = $name[$i];
                if (is_numeric($char)) {
                    echo "invalid Name";
                  return false;
                }
            }
            $this->name = $name;
            return true;
        }

        protected function is_valid_age($age){
            if (!is_numeric($age)){
                echo "invalid Age";
                return false;
            }
            if (0 <= $age && $age <= 120){
                $this->age = $age;
                return true;
            }
            echo "invalid Age";
            return false;
        }

        protected function is_valid_email($email){
            $count_at = 0;
            $count_dot = 0;
            for ($i = 0; $i < strlen($email); $i++){
                $char = $email[$i];
                if ($char == '@') {
                    $count_at += 1;
                }
                if ($char == '.') {
                    $count_dot += 1;
                }
            }
            if ($count_dot != 1 || $count_at != 1){
                echo "invalid Email";
                return false;
            }
            $this->email = $email;
            return true;
        }
    }

    

?>