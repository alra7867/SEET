<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username&&$pasword)
{

$connect = mysql_connect("localhost","root","") or die("Could not connect");
mysql_select_db("seet") or die("cannot find my database");
} else {
  die("Please enter username or password");
}


 ?>
