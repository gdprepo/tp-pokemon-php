<?php

        include_once './pokemon.php';
        include_once './index.php';
        include_once './usable.php';


        abstract class Heal
        {
                public $name;
                public $hill;
    
                abstract public function __construct ();

                public function heal ($pokemon, $hill)
                {
                        $pokemon->life = $pokemon->life + $hill;
                        return ($capture);
                }

                public function use ($pokemon)
                {
                    echo $this->name . ' utilisé sur ' . $pokemon->name . '...';
                    
                    $catch = $this->heal($pokemon, $this->hill);
                    
                    if (!$catch)
                    {
                        echo "ko.\n";
                        return false;
                    }
        
                    echo ' ' . $pokemon->name . ' a été capturé !';
                    return true;
                }
        }


        class Potion extends Heal
        {
                public function __construct ()
                {
                        $this->name = 'Potion';
                        $this->hill = 20;
                }

        } 

        class Superpotion extends Heal
        {
                public function __construct ()
                {
                        $this->name = 'Superpotion';
                        $this->hill = 50;
                }

        }

        class Hyperpotion extends Heal
        {
                public function __construct ()
                {
                        $this->name = 'Hyperpotion';
                        $this->hill = 200;
                }

        }

        class Potionmax extends Heal
        {
                public function __construct ()
                {
                        $this->name = 'Potionmax';
                        $this->hill = $pokemon->max_life;
                }
        }






?>