<?php
include('connection.php');
if (isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $qualification=$_POST['qualification'];
    $image=$_FILES['image'];
    $description=$_POST['description'];


    // if($image['type'] == 'image/jpg' || $image['type'] == 'image/jpeg' || $image['type'] == 'image/png' && $image['size'] < 1024*1024){
    //     $newimg = 'image_'.time().'.jpg';
    //     move_uploaded_file($image['tmp_name'],'teacher/'.$newimg);
    //     echo "workin";

$query = "UPDATE teachers SET name='$name', qualification='$qualification', description='$description' WHERE id='$id' ";
$sql=mysqli_query($conn, $query) or die(mysqli_error($conn));
echo "workin";
if($sql)
{
    echo "workin";
    echo"<script> alert('insert data successfully');</script>";
    header('location:index.php');
}
else{
    echo"<script> alert('failed');</script>";
}


    
}

?>