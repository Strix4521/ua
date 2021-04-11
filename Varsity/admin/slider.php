<?php include("session.php")?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php');
?>
<?php include('header.php');
?>

<aside class="sidenav hidden-sm hidden-md" id="nav">
       <div class="list">
          
           <a href="index.php" ><i class="fas fa-chalkboard-teacher"></i> Teacher</a>
           <a href="" ><i class="fas fa-user-graduate"></i> Student</a>
           <a href="course.php" ><i class="fas fa-laptop-code"></i> Courses</a>
           <a href="slider.php" class="active"><i class="fas fa-sliders-h"></i> Slider</a>
           
       </div>
   </aside>

<div class="grid">
          <div class="painel">
              <div class="painel-header">
                  <h4 class="painel-title">Courses</h4>
                  <a href="add_slider.php" class="btn btn-green">add new</a>
              </div>
              <div class="painel-body">
                  <div class="alert alert-success">Edit delete or add new courses</div>
                <table class="zebra">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        
                       
                        <th colspan="2">Action</th>
                    </tr>


                    <?php
       include('connection.php');
       $query="select * from slider";

$sql=mysqli_query($conn, $query);

 while ($row=mysqli_fetch_assoc($sql)) {
?>
<tr>

<td><?php echo $row['id']; ?></td>
 <td><?php echo $row['title']; ?></td>
  <td><?php echo $row['sub_title']; ?></td>
   <td><img src="slider/<?php echo $row['image'] ?> " height="50px" width="50px"></td>
   <td><?php echo $row['description']; ?></td>
   
   <td><a href="modify_slider_from.php?Id=<?php echo $row['id'];?>"class="btn btn-orange"><i class="fa fa-edit"></i></a></td>
   <!-- <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a> -->
  <td><a href="delete_slider.php?Id=<?php echo $row['id'];?>"class="btn btn-red"><i class="fa fa-trash"></i></a></td>

</tr>

 <?php } ?>                
                </table>
              </div>
          </div>




<script src="public/js/main.js"></script>
</body>
</html>