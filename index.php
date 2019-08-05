<?php
//require pages
require_once('settings.php');
$Outline->header();
require 'segments/navbar.php';
echo "<div>";
echo "Welcome " . $user->getName();
echo "</div>";

$Outline->footer();
