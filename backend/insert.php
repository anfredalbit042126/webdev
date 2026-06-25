<?php
require_once("connections.php");

if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $phone     = $_POST['phone'];
    $email     = $_POST['email'];
    $province  = $_POST['province'];
    $city      = $_POST['city'];
    $barangay  = $_POST['barangay'];
    $message   = $_POST['message'];

    $sql = "INSERT INTO profile
            (firstname, lastname, phone, email, province, city, barangay, message)
            VALUES
            (
                '$firstname',
                '$lastname',
                '$phone',
                '$email',
                '$province',
                '$city',
                '$barangay',
                '$message'
            )";

    $row_set = mysqli_query($con, $sql);

if($row_set){

    header("Location: /webdev/frontend/contact/contact.php?success=1");
    exit();

} else {
    echo "Error: " . mysqli_error($con);
}
}
?>