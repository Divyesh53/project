<?php include "includes/db.php" ?>
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
</head>




<body>



   <div class="row all-post">
      <div style="margin-top:20px;" class="col-lg-11 col-md-12">

         <form action="" method="post">
            <select name="searchType"  class="form-select" aria-label="Default select example">
               <option hidden>Type</option>
               <option name="title" onclick="title()" value="1">Title</option>
               <option name="date" value="2">Date</option>

               <option name="author" value="3">Author</option>
            </select>
            <input type="search" name="search">
            <input type="submit" name="submit">
         </form>


      </div>
   </div>
   
   <script>
      // title(){
      //    var selectBar = document.getElementById("")


      // }
   </script>
   <?php
   // $searchDate 
   // $searchValue = $_POST['searchType'];
//    echo "$searchValue";
//    // $searchParameter = "1";



// if($searchValue="1"){
//      $searchParameter = "1";
//    if (isset($_POST['submit'])) {
//       $search = $_POST['search'];
//       $searchParameter = "dailyLogs.title like'%" . $search . "%' or dailyLogs.description like'%" . $search . "%'";
//       // echo $searchParameter;
//       // echo "<script>alert('$searchParameter')</script>";
   
//    }
// }
// elseif(){

// }
// else(){

// }

//for author
// $searchParameter = "1";

//    if (isset($_POST['submit'])) {
//       // $searchType = $_POST['searchType'];
//       $search = $_POST['search'];

//       $searchParameter = "thpEmployee.first_name like'%" . $search . "%'";
  
//    }





// for date
$searchParameter = "1";

   if (isset($_POST['submit'])) {
      // $searchType = $_POST['searchType'];
      $search = $_POST['search'];

      $searchParameter = "dailyLogs.date like'%" . $search . "%'";
  
   }

      //  echo $searchParameter;
      // echo "<script>alert('$searchValue')</script>";

      // . "%' and dailyLogs.title like'%" . $searchType . "%'";
      // $baseQuery .= $searchParameter;
   // $searchTitle= $_POST['searchTitle'];
   




   // real
   // $searchParameter = "1";
   // if (isset($_POST['submit'])) {
   //    $search = $_POST['search'];
   //    $searchParameter = "dailyLogs.title like'%" . $search . "%' or dailyLogs.description like'%" . $search . "%'";
   //    // echo $searchParameter;
   //    // echo "<script>alert('$searchParameter')</script>";
   
   // }

   $baseQuery = "SELECT * FROM `thpEmployee` JOIN `dailyLogs` ON thpEmployee.emp_id = dailyLogs.Emp_id  WHERE ";
   $baseQuery .= $searchParameter;
   // $baseQuery .= $searchType;
   
   $query = $baseQuery . "  ORDER BY dailyLogs.date DESC";
   // $query = $baseQuery . "  ORDER BY dailyLogs.date DESC";
   // echo "<script>alert( '$query' );</script>";
   


   $result = mysqli_query($conn, $query);
   $row = mysqli_num_rows($result);




   while ($row = mysqli_fetch_assoc($result)) {
      $empId = $row['emp_id'];
      $reportId = $row['report_id'];
      $authorFname = $row['first_name'];
      $authorLname = $row['last_name'];
      $reportTitle = $row['title'];
      $reportDescription = $row['description'];
      $reportDate = $row['date'];
      $modifyDate = $row['modifyDate'];

      ?>



      <div class="row all-post">
         <div style="margin-top:20px;" class="col-lg-11 col-md-12">
            <div class="update-div">

               <a href="updateReport.php?postId=<?php echo $reportId ?>"><button class="update-report" name="update">Edit
                     Post</button></a>

            </div>
            <div>
               <p>Date:-
                  <?php echo $reportDate ?>
               </p>
               <p>Last Modified On:-
                  <?php if ($modifyDate != '0000-00-00') {
                     echo $modifyDate;
                  } else {
                     echo "Not Modified";
                  } ?>
               </p>
               <br>
               <p>Author:-
                  <?php echo $authorFname, " ", $authorLname ?>
               </p>
               <br>
            </div>
            <div>
               <h1>
                  <?php echo $reportTitle ?>
               </h1>
            </div><br>
            <div>
               <p>
                  <?php echo $reportDescription ?>
               </p>
            </div>

         </div>
      </div>
   <?php } ?>
   <?
   ?>
</body>
</body>

</html>