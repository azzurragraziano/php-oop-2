<?php 
    class AnimalProducts {
        public $animal;
        public $size;
        public $price;

        public function __construct_($_animal, $_size, $_price) {
            $this->animal = $_animal;
            $this->size = $_size;
            $this->price = $_price;
        }
    }

?>