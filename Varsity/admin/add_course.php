<?php include("session.php")?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">



    
   
</head>
<body>



<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" action="add_course.php" method="post" enctype="multipart/form-data">
                                <!-- <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">ID</label>
                                    <div class="col-md-6">
                                        <input type="text" id="id" class="form-control" name="id">
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">course Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Detail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="detail" class="form-control" name="detail">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-6">
                                        <input type="file" id="image" class="form-control" name="image">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Price</label>
                                    <div class="col-md-6">
                                        <input type="text" id="price" class="form-control" name="price">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Day</label>
                                    <div class="col-md-6">
                                        <input type="text" id="day" class="form-control" name="day">
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" id="submit" name="submit" value="Register">
                                        Upload
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include('connection.php');
if (isset($_POST['submit'])) {
	
    $name=$_POST['name'];
    $detail=$_POST['detail'];
    $price=$_POST['price'];
    $day=$_POST['day'];
    
	 $image = $_FILES['image'];
          
          if($image['type'] == 'image/jpg' || $image['type'] == 'image/jpeg' || $image['type'] == 'image/png' && $image['size'] < 1024*1024){
            $newimg = 'image_'.time().'.jpg';
            move_uploaded_file($image['tmp_name'],'courses/'.$newimg);
            $sql = "INSERT INTO  courses (name,detail,image,price,day) VALUES ('$name','$detail','$newimg','$price','$day')";
               $query = $conn->prepare($sql);
               $result=$query->execute();

            if ($result) {
                echo"<script> alert('insert data successfully');</script>";
           
            }
            else{
                echo"<script> alert('failed');</script>";
            }
            
               
}
}

?>