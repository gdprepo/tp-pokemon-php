<?php
        include_once('./index.php');
        include_once('./hill.php');

        class Bot
        {

                public function __construct() {
                        $this->bag = [
                                new Salameche(1),
                                new Bulbizarre(1),
                                new Carapuce(1),
                                new Potion(),
                                new Superpotion(),
                                new Hyperpotion(),
                        ];
                        echo '<br>';
                        var_dump($this->bag);
                        echo '<br>';
                }



        }

        new Bot();


?>