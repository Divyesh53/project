<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>


<?php
if (isset($_POST['submit'])) {
    session_start();

    $date = $_POST['date'];
    $code = $_POST['passcode'];
    $title = $_POST['title'];
    $description = $_POST['description'];


    $query = "SELECT * FROM `thpEmployee` WHERE passcode = $code";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if ($row != null) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['id'] = $row['emp_id'];
            $id = $row['emp_id'];
        }
        if ($_SESSION['id'] == $id) {
            $query = "INSERT INTO `dailyLogs` (`title`, `description`,`date`,`emp_id`) VALUES ('$title', '$description','$date','$id')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>alert('Report Inserted Successfully');</script>";
            }
        } else {
            echo "User Not Exixt with this id";
        }
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
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

                    <input class="report-title" type="text" id="title"
                        value="<?php echo isset($_POST['title']) ? $_POST['title'] : '';?>" name="title"
                        placeholder="Enter Your Title" required>

                    <textarea name="description" class="report-detail" id="description" cols="30" rows="10"
                        placeholder="Add Description Here"
                        required><?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?></textarea>

                    <input type="password" class="report-pass" id="passcode" name="passcode"
                        placeholder="Enter Your Passcode" required>


                </div>

                <div class="footer">

                    <button class="report-submit" type="submit" name="submit">Submit</button>
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