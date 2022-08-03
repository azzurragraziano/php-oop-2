<?php

    require_once __DIR__ . '/user.php';

    class LoggedUser extends User {
        // override
        public $discount = 20;
    }

?>