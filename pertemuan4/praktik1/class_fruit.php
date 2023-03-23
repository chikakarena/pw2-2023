<?php 
    class Fruit {
        // Property
        public $name;
        public $color;
        
        // Method
        function getName() {
            return $this->name;
        }

        function getColor() {
            return $this->color;
        }

        //  With Parameter
        // function geName($name) {
        //     return $this->name = $name;
        // }

        // function getColor($color) {
        //   return $this->color = $color;
        //}

        //  Call Object With Parameter
        // $apple = new Fruit();
        // $banana = new Fruit();

        // echo $apple->getName('Apple');
        // echo '<br>';
        // echo $apple->getColor('Red');
        // echo '<br><br>';
        // echo $banana->getName('Banana');
        // echo '<br>';
        // echo $banana->getColor('Yellow');

    }
    
    // Call Object
    $apple = new Fruit();
    $banana = new Fruit();
    $apple->name = 'Apple';
    $banana->name = 'Banana';
    $apple->color = 'Red';
    $banana->color = 'Yellow';

    echo $apple->getName();
    echo '<br>';
    echo $apple->getColor();
    echo '<br><br>';
    echo $banana->getName();
    echo '<br>';
    echo $banana->getColor();
?>