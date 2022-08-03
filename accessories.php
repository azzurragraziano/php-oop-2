<?php 
    require_once __DIR__ . '/products.php';

    class Accessories extends AnimalProducts {
        public $type;

        //override
        public function __construct($_animal, $_price, $_type) {
            $this->animal = $_animal;
            $this->price = $_price;
            $this->type = $_type;
        }
    }
?>