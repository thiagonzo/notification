<?php

require __DIR__ . '/vendor/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto", "<p>texto do email de <b>Teste</b></p>", "thiagonzo@gmail.com", "Thiago Rodrigues", "edificiopatricia20@gmail.com", "Síndico");