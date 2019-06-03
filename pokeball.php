<?php

        include_once './pokemon.php';
        include_once './index.php';
        include_once './usable.php';


        abstract class Ball
        {
                public $name;
                public $level;
    
                abstract public function __construct ($name, $level);



                public function capture ($pokemon)
                {
                        $capture = (($pokemon->max_life - $pokemon->life) / $pokemon->max_life) * (1 + ($this->level - $pokemon->lvl_pokemon) / 25);
                        return ($capture);
                }

                public function use ($pokemon)
                {
                    echo $this->name . ' lancée sur ' . $pokemon->name . '...';
                    
                    $catch = $this->capture($pokemon);
                    
                    if (!$catch)
                    {
                        echo "ko.\n";
                        return false;
                    }
        
                    echo ' ' . $pokemon->name . ' a été capturé !';
                    return true;
                }
        }

        class Pokeball extends Ball
        {
                public function __construct ($name, $level)
                {
                        $this->name = "Pokeball";
                        $this->level = 10;
                }

        } 

        class Superball extends Ball
        {
                public function __construct ($name, $level)
                {
                        $this->name = "Superball";
                        $this->level = 20;
                }

        } 

        class Hyperball extends Ball
        {
                public function __construct ($name, $level)
                {
                        $this->name = "Hyperball";
                        $this->level = 50;
                }

        } 

        class Masterball extends Ball
        {
                public function __construct ($name, $level)
                {
                        $this->name = "Masterball";
                        $this->level = 100;
                }

        } 























?>
