<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "trc";

$conn = new mysqli($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
}else{
    '11';
} ?>