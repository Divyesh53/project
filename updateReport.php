<?php include "includes/db.php"; ?>



<?php
session_start();

 //Getting the report id from the get request from view_dailyLogs.php

if (isset($_GET['postId'])) {
    $reportId = $_GET['postId'];


    $query = "SELECT * FROM `dailyLogs` WHERE report_id = $reportId";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $description = $row['description'];
        $employeeId = $row['emp_id'];


    }
}


//After the form submission

if (isset($_POST['submit'])) {


    $newTitle = $_POST['title']; //Store the form data in variable
    $newDescription = $_POST['description'];
    $passcode = $_POST['passcode'];
    $date = $_POST['date'];

    //Checking Employee id
    $query = "SELECT * FROM `thpEmployee` WHERE emp_id = $employeeId";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);


    while ($row = mysqli_fetch_assoc($result)) {
        $empId = $row['emp_id'];
        $pass = $row['passcode'];
    }


    if($passcode == $pass) { //Check Employee passcode
        $updateQuery = "UPDATE dailyLogs SET title = '{$newTitle}', description = '{$newDescription}', modifyDate = '{$date}' WHERE report_id = $reportId";
        $updateResult = mysqli_query($conn , $updateQuery);
        if($updateQuery){

            echo "<script>alert('Record Updated Successfully');location='view_dailyLogs.php';</script>";
            session_destroy();

        }
        else{
            echo mysqli_error($conn);
        }
    }else{
        echo "<script>alert('Invalid Credentials');location='updateReport.php?postId=$reportId';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Welcome To Think HP Consultant</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./css/report.css" rel="stylesheet" />
</head>

<body>
    <section id="bg">
        <div class="container main-content">

            <div class="heading">
                <h1>Daily Logs</h1>
            </div>
            <div class="rehome">
                <p class="backhome-p"><a href="index.php" class="backhome">
                        Home</a>
                </p>
            </div>
            <div class="view-log">
                <a href="view_dailyLogs.php" target="_blank"> <button class="view-log-a">View Logs</button> </a>
            </div>


            <form action="" id="myform" method="post">
                <div class="form">


                    <div>
                        <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" id="date">
                    </div>


                    <!-- <input type="text" id="name" name="name" placeholder="Enter Your Name"> -->

                    <input class="report-title" type="text" id="title" value="<?php echo $title; ?>" name="title"
                        placeholder="Enter Your Title" required>

                    <textarea name="description" class="report-detail" id="description" cols="30" rows="10"
                        placeholder="Add Description Here" required><?php echo $description; ?></textarea>

                    <input type="password" class="report-pass" id="passcode" name="passcode"
                        placeholder="Enter Your Passcode" required>


                </div>

                <div class="footer">

                    <button class="report-submit" type="submit" name="submit">Update</button>
                    <!-- <input name="reset" id="reset" onclick="reset()" value="Reset" class="reset-report"> -->

                </div>
            </form>
            <!-- <script>
                function submitBtn() {
                  let btn = document.getElementById('myform');   
                  btn.submit();
                  btn.reset();
                  return false;                 
                }
            </script> -->
        </div>
    </section>
</body>

</html>