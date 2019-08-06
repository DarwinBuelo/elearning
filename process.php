<?php
/**
 *  Will handle all the process on the system
 */

require 'settings.php';

$task = Util::getParam('task');
switch ($task) {
    case 'logout':
        session_destroy();
        header('location:index.php');
        break;
}
