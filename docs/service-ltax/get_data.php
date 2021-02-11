
<?php
include 'config.php';
header("Access-Control-Allow-Origin: *");


      //  $sql = " DELETE  from Inputbuilding ;  ";
        $sql = " SELECT * from Inputbuilding ;  ";
   
        $result=mysqli_query($conn,$sql);
        $coursesArray = array();
        while ($row = mysqli_fetch_assoc($result)) {
          $coursesArray[] = $row;
        }
        echo json_encode($coursesArray);

?>