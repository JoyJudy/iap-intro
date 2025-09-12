<?php
//include the ClassAutoLoad method
require_once 'ClassAutoLoad.php';


$layout->header($conf);
print $hello->greet();
print $hello->today(); 
$form->login();
$layout->footer($conf);
