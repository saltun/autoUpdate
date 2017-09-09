<?php
require_once "autoUpdate.php";
$autoUpdate=new autoUpdate;
$autoUpdate->sourceurl="https://gist.githubusercontent.com/saltun/d1febfd82e12b57b6821/raw/d71b667279b1397b59ad1cb8f5c2419360434fc6/test.html";
$autoUpdate->file="test.html";
$autoUpdate->control();

if ($autoUpdate) {
	echo "Update";
}

?>
