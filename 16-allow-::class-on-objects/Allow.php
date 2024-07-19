<?php

class Login
{
    # Kode.
}

$login = new Login();

var_dump($login::class); # PHP 8.
var_dump(get_class($login));
var_dump(Login::class);
