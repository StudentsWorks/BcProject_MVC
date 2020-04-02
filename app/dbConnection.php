<?php


function OpenCon()
 {
    $dbhost = "localhost";
    $dbuser = "tania";
    $dbpass = "2201";
    $db = "BCproject";
    
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
 }
 
