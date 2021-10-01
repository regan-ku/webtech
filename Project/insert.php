<?php
require_once('connect.php');
$Fname = $_POST['Fname'];
$Regno = $_POST['Regno'];
$Gender = $_POST['Gender'];
$DOB = $_POST['DOB'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$County = $_POST['County'];
$Course = $_POST['Course'];
$sql = "INSERT INTO studentdetails (Fname,Age,Regno,Gender,DOB,Email,County,Course) 
      VALUES ('$Fname','$Regno','$Gender','$DOB','$Age','$Email','$County','$Course')";
if(mysqli_query($dbconnect, $sql)){
    echo "<br>Application received!! We will get back to you through your email" ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnect);
}
 // Close connection
mysqli_close($dbconnect);
?>
