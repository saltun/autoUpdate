<?php
require_once "autoUpdate.class.php";
$autoUpdate=new autoUpdate;
$autoUpdate->sourceurl="https://gist.githubusercontent.com/saltun/f0232a87c4cdc272ac70/raw/63c290ed54d0b98ab6ae7832052f0ca2aeb7fd38/testClass.php";
$autoUpdate->file="testClass.php";
$autoUpdate->control();

if ($autoUpdate) {
	echo "Update";
}

?>