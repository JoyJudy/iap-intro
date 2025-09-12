<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Biashara Street',
    'email_from' => 'judyjwangui@gmail.com',
    'name_to' => 'JoyJudy',
    'email_to' => 'judyjwangui@gmail.com',
    'subject' => 'Welcome!',
    'body' => 'Hello! Thank you for signing up to our business page. Looking forward to doing business with you!'
];


$ObjSendMail->Send_Mail($conf, $mailCnt);