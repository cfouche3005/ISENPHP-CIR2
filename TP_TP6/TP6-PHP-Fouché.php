<h1>TP6</h1>

<hr>
<h2>Ex 1</h2>

<?php
    class football_team{
        private $name = "FCfouche";
        private $number_title = 7 ;

        public function display(){
            echo "L'équipe ".$this->name." a ".$this->number_title." titres";
        }
    }
    $test_team = new football_team;
    $test_team->display();
?>