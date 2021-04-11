
<?php
include('connection.php');
$delete=$_GET['Id'];
$query="delete from courses where id='$delete' ";
$sql=mysqli_query($conn, $query);
if($sql){
    echo"<script> alert('delete record successfully');</script>";
    header('location:course.php');
}else{
    echo"<script> alert('failed to delete data');</script>";
}
?>