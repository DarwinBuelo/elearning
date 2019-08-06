<?php
//require pages
require_once('settings.php');
$Outline->header();
require 'segments/navbar.php';
// Only shows when you are login
if(isset($user) && !empty($user)){
    if($user->getRoleID() == 1){
        Util::redirect('admin.php');
    }
    echo 'test';
}


$Outline->footer();
