<?php
require_once "config.php";
//if (isset($_POST['key']) == "saveData")
//{
//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $contact = $_POST['contact'];
//
//    $query = "INSERT INTO bird_ajax_register SET name='$name',email='$email',contact='$contact', status=1";
//    $result = $conn->query($query);
//    if ($result) {
//        echo "status^saved";
//    }
//}

if (isset($_POST['submitBtn']))
{
     $name = $_POST['name'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];

    $query = "INSERT INTO bird_active_inactive_users SET name='$name',email='$email',contact='$contact', status=1";
    $result = $conn->query($query);
    if ($result) {
        echo '<h2 style="color:green">Status^Saved</h2>';
        header('location:index.php');
    }
}
