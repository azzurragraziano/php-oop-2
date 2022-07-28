<?php 
    require_once __DIR__ . '/products.php';

    class Food extends AnimalProducts {
        //override
        public $animal;

        public $type;
        public $brand;
        public $quantity;

        public function __construct($_type, $_animal) {
            $this->type = $_type;
            $this->animal = $_animal;
        }
    }
?>