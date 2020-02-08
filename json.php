<?php
include 'config.php';
include 'class.browser.php';
header('Content-Type: application/json');
$browser = new Browser();
$list=$browser->get_Browser();
echo "{\"Browser\":";
echo json_encode($list);
echo "}";
?>
