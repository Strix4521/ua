
<?php
include('connection.php');

if (isset($_POST['submit'])){

    $username = $_POST['email'];
    $password = $_POST['password'];
    $textp="wrong password";
    $texte="wrong Email";
    $query = "select * from admin_user where username = '$username'";
    $result = mysqli_query($conn,$query);
    $numrow = mysqli_num_rows($result) or die (mysqli_error($conn));
    $row = mysqli_fetch_row($result) or die(mysqli_error($conn));
  
     if($numrow == 1){       
     if($row[2] == $password){
        session_start();

            $_SESSION['username']=$username;
            
            header("location:index.php");

        }
     else{
         header("location:admin_login.php?p=$textp");
     }
 }
 else{
     header("location:admin_login.php?e=$texte");
 }
}

?>