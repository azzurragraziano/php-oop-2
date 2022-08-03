<?php 
    require_once __DIR__ . '/products.php';

    class Food extends AnimalProducts {

        public $type;
        public $brand;
        public $quantity;

        //override
        public function __construct($_animal, $_price, $_type, $_quantity) {
            $this->animal = $_animal;
            $this->price = $_price;
            $this->type = $_type;
            $this->quantity = $_quantity;
        }
    }
?>