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
    
    
<script type="text/javascript">
function matchpass(){
var firstpassword=document.my-form.password.value;
var secondpassword=document.my-form.password2.value;

if(firstpassword==secondpassword){
return true;
}
else{
alert("password must be same!");
return false;
}
}
</script>
   
</head>
<body>



<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Add new teacher</div>
                        <div class="card-body">
                            <form name="my-form" action="add_member.php" method="post" enctype="multipart/form-data" action="http://www.javatpoint.com/javascriptpages/valid.jsp" onsubmit="return matchpass()">
                               

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Email-id</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="password2" class="form-control" name="password2">
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" id="submit" name="submit" value="Register">
                                        Add member
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
    $username=$_POST['username'];
    $password=$_POST['password'];
  

            $sql = "INSERT INTO  admin_user (name,username,password) VALUES ('$name','$username','$password')";
               $query = $conn->prepare($sql);
               $result=$query->execute();

            if ($result) {
                echo"<script> alert('insert data successfully');</script>";
              
            }
            else{
                echo"<script> alert('failed');</script>";
            }
            
               

}

?>