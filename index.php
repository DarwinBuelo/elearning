<?php
//require pages
require_once('settings.php');
$Outline->header();


if(isset($user) && !empty($user)){
    //includes only when admin is available
    if($user->getRoleID() == 1){
        require 'segments/sidebar.php';

    }
}else{
    require 'segments/navbar.php';
}

//main content
?>
    <div class="container-fluid">
        <div>ehelooo</div>
    </div>

<?php


$Outline->footer();
