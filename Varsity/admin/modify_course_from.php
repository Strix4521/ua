<!------ Include the above in your HEAD tag ---------->
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

<?php
        include('connection.php');
        $update=$_GET['Id'];
        $query="select *from courses where id='$update'";
        $sql=mysqli_query($conn, $query);
        $row=mysqli_fetch_assoc($sql);
        ?>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" action="update_course.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row" style="display: none;">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">ID</label>
                                    <div class="col-md-6">
                                        <input type="text" id="id" class="form-control" name="id" value="<?php echo $row['id']?>" >
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Course Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name" value="<?php echo $row['name']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Detail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="detail" class="form-control" name="detail" value="<?php echo $row['detail']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-6">
                                        <input type="file" id="image" class="form-control" name="image" value="<?php echo $row['image']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Price</label>
                                    <div class="col-md-6">
                                        <input type="text" id="price" class="form-control" name="price" value="<?php echo $row['price']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Day</label>
                                    <div class="col-md-6">
                                        <input type="text" id="day" class="form-control" name="day" value="<?php echo $row['day']?>">
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" id="submit" name="submit" value="Register">
                                        Update
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