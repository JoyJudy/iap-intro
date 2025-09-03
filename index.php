<?php
//include the ClassAutoLoad method
require_once 'ClassAutoLoad.php';

//display the header
$layout->header($conf);

//create the greet method
print $hello->greet();

//Call the today method
print $hello->today(); 

//Display the signup form
$form->signup();

//Display the layout form
$layout->footer($conf);
