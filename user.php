<?php 
    class User {
        public $name;
        public $lastname;
        public $mail; 
        public $discount;
        protected $shoppingBag = [];

        public function __construct($_name, $_lastname, $_mail) {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->mail = $_mail;
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

        // public function payment() {
        //     $amountDue = $this->getTotalPrice();
        //     var_dump($amountDue);

        //     if($this->saldo > $amountDue) {
        //         throw new Exception('saldo non disponibile');
        //     } else {
        //         return 'transazione effettuata con successo';
        //     }
        // }
    }
?>