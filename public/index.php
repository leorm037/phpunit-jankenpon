<?php

require_once '../vendor/autoload.php';

$jankenpon = new \src\Jankenpon\Service\Jankenpon();

echo $jankenpon->play("pedra", "pedra");