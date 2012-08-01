<?php 
//it`s a web service that get string in json format and securify it

if(isset($_POST['data'])){
	$request = json_decode($_POST['data']);
	require_once("../Securify.php");
}

