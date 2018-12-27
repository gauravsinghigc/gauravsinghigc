<?php

$query_request = $_GET['gsi_query'];

if ($query_request == "resume") {
	header("location: index.php");
} elseif ($query_request == "website") {
	header("location: gauravsinghigc_index.php");
} elseif ($query_request == "") {
	header("location: error.php");
} elseif ($query_request == " ") {
	header("location: error.php");
} elseif ($query_request !== " ") {
	header("location: error.php");
} elseif ($query_request !== "") {
	header("location: error.php");
} 

?>

