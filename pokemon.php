<?php

        include_once './pokemon.php';


        abstract class Pokemon
        {
                public $name;
                public $life;
                public $level;
                public $type;
                public $strength;
    
                public function __construct ($name, $max_life, $life, $level, $type, $strength)
                {
                        $this->name = $name;
                        $this->max_life = $max_life;
                        $this->life = $life;
                        $this->level = $level;
                        $this->type = $type;
                        $this->strength = $strength;

                }

                abstract public function level_up ();



        }


?>
