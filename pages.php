<?php

if (isset($_POST['page_request'])) {
	$page_request = $_POST['page_request'];
	if ($page_request == "HOME") {
		header("location: gauravsinghigc_index.php");
	} elseif($page_request == "resume"){
		header("location: index.php");
	}  elseif($page_request == 8765){
		header("location: gauravsinghigc_download.php");
	} elseif($page_request == 9810){
		header("location: gauravsinghigc_index.php");
	} elseif($page_request == 981089){
		header("location: gauravsinghigc_hire_form.php");
	} else {
		header("location: error.php");
	}
} 