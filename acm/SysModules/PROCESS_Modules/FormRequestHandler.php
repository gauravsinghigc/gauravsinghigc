<?php

//if request
function IfRequested($method = "GET", $name, $default, $sec = null)
{

  //check request and return values via get
  if ($method == "GET") {
    if (isset($_GET["$name"])) {
      $RequestedValue = $_GET["$name"];
    } else {
      $RequestedValue = $default;
    }

    // check request and return values vai post
  } elseif ($method == "POST") {
    if (isset($_POST["$name"])) {
      $RequestedValue = $_POST["$name"];
    } else {
      $RequestedValue = $default;
    }

    //check request and return values via any request
  } elseif ($method == "REQUEST") {
    if (isset($_POST["$name"])) {
      $RequestedValue = $_REQUEST["$name"];
    } else {
      $RequestedValue = $default;
    }

    //with no request 
  } else {
    $RequestedValue = $default;
  }

  //securiyt or enct
  if ($sec == true) {
    $RequestedValue = SECURE($RequestedValue, "e");
  } elseif ($sec == null) {
    $RequestedValue = $RequestedValue;
  } else {
    $RequestedValue = $RequestedValue;
  }

  return $RequestedValue;
}

//POST DATA
function POST($data, $enc = null)
{
  $results = IfRequested("POST", $data, "", $enc);
  return $results;
}

//GET DATA
function GET($data, $enc = null)
{
  $results = IfRequested("GET", $data, "", $enc);
  return $results;
}

//Request DATA
function REQUEST($data, $enc = null)
{
  $results = IfRequested("REQUEST", $data, "", $enc);
  return $results;
}
