<?php
$conn = new mysqli("localhost","root","","codingbirds");
if (! $conn){
    die("Error in connection".$conn->connect_error);
//    die('Server connection fail.');
}
