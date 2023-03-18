<?php  include "includes/db.php"; ?>


<?php

if(isset($_POST['submitFeedback'])){
    $name = $_POST['name'];
    $email = $_POST['userEmail'];
    $designation = $_POST['designation'];
    $company = $_POST['company_name'];
    $feedbackTitle = $_POST['title'];
    $feedbackMessage = $_POST['message'];
    $ratings = $_POST['rating'];
    $date = date("Y-m-d");
    echo $date;
    

    $query = "INSERT INTO `feedback` (`name`, `email`, `designation`, `componyName`, `feedbackTitle`, `feedback`, `feedbackDate`, `rating`) VALUES ('$name', '$email', '$designation', '$company', '$feedbackTitle', '$feedbackMessage', '$date', '$ratings')";
    
    $result = mysqli_query($conn , $query);
    if($result){
        echo "<script>alert('Review Submitted');location='index.php'</script>";
    }else{
     echo "connection Failed", mysqli_error($conn);  
    }
 
}


?>