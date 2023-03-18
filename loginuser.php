<?php  include "includes/header.php"; ?>
<?php  include "includes/db.php"; ?>

<?php


if(isset($_POST['username']) and isset($_POST['password'])){ //isset function checks if the variable is set or not.

    $username = $_POST['username']; //login.php form Post request  
    $password = $_POST['password'];

    if($username == null || $password == null)
    {
    $message="Missing Credentials!";
    echo "<script type='text/javascript'>alert('$message');location='index.php';</script>";
    echo "Empty Login Credentials<p></p>";
    echo("Missing Username or Password!");
    }
       




$query = "SELECT * FROM user WHERE email = '$username' and PASSWORD = '$password'";

$result = mysqli_query($conn, $query);

    $row  = mysqli_num_rows($result);
    if($row){  //number of rows available in databse as per the query
        session_start(); //Starting a session
while ($row = mysqli_fetch_assoc($result)) {   //while row is not equal to null loop this
   
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (60 * 1); //6 seconds
    // $_SESSION['username'] = $row['email']; //Storing the values in the session global variable
    // $_SESSION['name'] = $row['first_name'];
    // $_SESSION['lname'] = $row['last_name'];
    $_SESSION['user_id'] = $row['id'];

}
header("Location:home.php");
}
else{
    echo  "<script type='text/javascript'>alert('User not found with this uname and pass');location='index.php';</script>";
  }
}
?>
<?php include "includes/footer.php"; ?>