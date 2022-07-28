<?php 
    require_once __DIR__ . '/products.php';

    class Food extends AnimalProducts {
        public $type;
        public $material;

        public function __construct($_type, $_material) {
            $this->type = $_type;
            $this->material = $_material;
        }
    }
?>