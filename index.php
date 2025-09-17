<?php
require_once 'classes.php';
require_once 'forms.php';

// create an instance of MyClass 
$instance = newMyClass();

//Create an instance of user_forms
$formInstance = new user_forms();

// call the method myMethod
$instance->heading();
$instance->myMethod();
$instance->footer();
