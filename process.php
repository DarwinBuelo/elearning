<?php
/**
 *  Will handle all the process on the system
 */

require 'settings.php';

function getParam($param)
{
    $param = $_REQUEST[$param];
    if (isset($param)) {
        return $param;
    } else {
        return null;
    }
}


$task = getParam('task');
switch ($task) {
    case 'logout':
        session_destroy();
        header('location:index.php');
        break;
}
