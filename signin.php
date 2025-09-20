<?php

require_once 'ClassAutoload.php';

$LayoutInstance->heading($conf);
$LayoutInstance->welcome($conf);
$formInstance->login();
$LayoutInstance->footer($conf);
