<?php  include "includes/db.php"; ?>

<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $alEmail = $_POST['alternate_email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

$query = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `alternate_email`, `mobile`, `password`) VALUES ('$fname', '$lname', '$email', '$alEmail', '$mobile', '$password')";
$result = mysqli_query($conn, $query);
if($result){
    echo "<script type='text/javascript'>alert('Success');location='index.php';</script>";
    // header("Location:index.php");
}else{
    echo "<script>alert('Failed')</script>.".mysqli_error($conn);
    // header("Location:signup.php");
}
?>