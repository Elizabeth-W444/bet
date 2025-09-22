<?php

class Layouts {
       public function heading($conf)  {
        echo "Welcome to " -$conf['site_name'] -"!";
       }

       public function welcome($conf) {
        echo "<p>This is a new semester.</p>";
       }

       public function footer($conf) {
       echo "<footer>"
        Copyright & copy;"  . date("Y") . "" . $Conf[site_name] . "
        <br>Contact us at <a href 'mailto:{$conf['email']}'>{$conf['email']}</a></footer>";
       }
}