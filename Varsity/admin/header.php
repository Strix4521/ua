<?php include("connection.php") ?>
<body>
  
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ul"></i></a>
            <a href="index.html" class="hidden-sm"><h1>Dashboard</h1></a>
        </div>
        <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
            <a href="add_member.php"><i class="fas fa-user-plus"></i> Add a new member</a>
            </form>
            <div>
            <?php
            if(!isset($_SESSION['username'])){
                header("location:admin_login.php");
            }
            $username= $_SESSION['username'];

                $query = "select * from admin_user where username = '$username'";
                $result = mysqli_query($conn,$query);
                $row= mysqli_fetch_row($result);
                $name= $row[3];
            
            ?>
                <a href="#" ><i class="fa fa-user" ></i><span><?php echo $name ?></span></a>
                <a href="admin_logout.php"><i class="fa fa-power-off"></i></a>
            </div>
        </div>
    </nav>
 
