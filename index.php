<?php
class MyClass {
       public function heading()  {
        echo "Welcome to BBIT DevOps!";
       }

       public function myMethod() {
        echo "<p>This is a new semester.</p>";
       }

       public function footer() {
        echo "<footer>Contact us at <a href 'mailto:info@bbit.edu'</a></footer>";
       }
}
// create an instance of MyClass and call myMethod
$instance = newMyClass();

// call the method myMethod
$instance->heading();
$instance->myMethod();
$instance->footer();
