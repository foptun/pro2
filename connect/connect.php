<?php

  // on server
  $servername = "mysql";
  $username = "root";
  $password = "1234";
  $dbname = "pro2";
  // on server

  // echo phpinfo();

  $conn = new mysqli($servername, $username, $password, $dbname);
  //$conn = new PDO("mysql:host={$servername};dbname={$dbname};charset=utf8", $username, $password);
  //$conn = new mysqli($servername, $port,$username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connect Database fail : " . $conn->connect_error);
  }
  $query = $conn->query("SET NAMES UTF8");

  
?>
