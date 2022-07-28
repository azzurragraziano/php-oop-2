<?php 
    class User {
        public $name;
        public $lastname;
        public $mail; 
        public $discount;
        public $isLogged;
        protected $shoppingBag = [];

        public function __construct($_name, $_lastname, $_mail, $isLogged) {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->mail = $_mail;
            $this->isLogged = $_isLogged;

            if($_isLogged) {
                $this->discount = 20;
            }
        }

        public function addProduct($product) {
            $this->shoppingBag[] = $product;
        }

        public function getShoppingBag() {
            return $this->shoppingBag;
        }

        public function getTotalPrice () {
            $totalPrice = 0;

            foreach ($this->shoppingBag as $product) {
                $totalPrice += $product->price;
            }

            $totalPrice -= $totalPrice * $this->discount / 100;

            return $totalPrice;
        }
    }
?>