<?php
include_once 'include/connection.php';
if(isset($_POST['submit']))
{    

     $name = $_POST['name'];
     $password = $_POST['password'];
     $skill = $_POST['skill'];
     $location = $_POST['location'];
     $sql = "INSERT INTO player (username,password,location,skill)
     VALUES ('$name','$password','$location','$skill')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("Location:login.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>