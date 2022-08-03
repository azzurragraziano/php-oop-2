<?php 
    class AnimalProducts {
        public $animal;
        public $size;
        public $price;

        public function __construct($_animal, $_price) {
            $this->animal = $_animal;
            $this->price = $_price;
        }
    }
?>