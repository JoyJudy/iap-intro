<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'ICS C Community',
    'email_from' => 'judyjwangui@gmail.com',
    'name_to' => 'JoyJudy',
    'email_to' => 'judyjwangui@gmail.com',
    'subject' => 'Welcome!',
    'body' => 'This is a new school year and thus a new semester. <b>Glad to have you on board!</b> All the best in all your endeavours!'
];


$ObjSendMail->Send_Mail($conf, $mailCnt);