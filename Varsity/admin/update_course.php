<?php
include('connection.php');
if (isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $detail=$_POST['detail'];
    $image=$_FILES['image'];
    $price=$_POST['price'];
    $day=$_POST['day'];

    // if($image['type'] == 'image/jpg' || $image['type'] == 'image/jpeg' || $image['type'] == 'image/png' && $image['size'] < 1024*1024){
    //     $newimg = 'image_'.time().'.jpg';
    //     move_uploaded_file($image['tmp_name'],'courses/'.$newimg);


$query = "UPDATE courses SET name='$name', detail='$detail', price='$price', day='$day' WHERE id='$id' ";
$sql=mysqli_query($conn, $query) or die(mysqli_error($conn));

if($sql)
{
    echo"<script> alert('insert data successfully');</script>";
    header('location:course.php');
}
else{
    echo"<script> alert('failed');</script>";
}


    }


?>