<?php
require 'settings.php';
require 'segments/admin/adminSettings.php';
$adminOutline->header();

$page = Util::getParam('page');

if(isset($user) && $user->getRoleID() == 1){
    //include all admin pages needed
    require 'segments/admin/sidebar.php';
    print '<div id="right-panel" class="right-panel">';
    require 'segments/admin/rightPanel.php';
    print '<div class="content mt-3">';
    if(isset($page)){
        switch ($page){

            case 'addUser':
                if(!empty(Util::getParam('submit'))){
                    //perform saving
                    $name = Util::getParam('name');
                    $lastname = Util::getParam('lastname');
                    $username = Util::getParam('uname');
                    $middlename = Util::getParam('mname');
                    $email = Util::getParam('name');
                    $password = "elearning";
                    User::addUser($name, $lastname, $username,$middlename, $email, $password);
                    //if the result was success set the a variable that will display success else 
                    //error then load the data back to the forms
                }
                require 'segments/admin/addUser/addUser.php';
                break;
            default:
                require 'segments/admin/dashboard/dashboard.php';
                break;
        }
    }
    print '</div></div>';

}

