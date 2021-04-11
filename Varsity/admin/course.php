<?php session_start()?>

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
           <a href="course.php" class="active"><i class="fas fa-laptop-code"></i> Courses</a>
           <a href="slider.php"><i class="fas fa-sliders-h"></i> Slider</a>
           
       </div>
   </aside>

<div class="grid">
          <div class="painel">
              <div class="painel-header">
                  <h4 class="painel-title">Courses</h4>
                  <a href="add_course.php" class="btn btn-green">add new</a>
              </div>
              <div class="painel-body">
                  <div class="alert alert-success">Edit delete or add new courses</div>
                <table class="zebra">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Image</th>
                        <th>price</th>
                        <th>day</th>
                        <th>status</th>
                        <th colspan="2">Action</th>
                    </tr>


                    <?php
       include('connection.php');
       $query="select * from courses";

$sql=mysqli_query($conn, $query);

 while ($row=mysqli_fetch_assoc($sql)) {
?>
<tr>

<td><?php echo $row['id']; ?></td>
 <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['detail']; ?></td>
   <td><img src="courses/<?php echo $row['image'] ?> " height="50px" width="50px"></td>
   <td><?php echo $row['price']; ?></td>
   <td><?php echo $row['day']; ?></td>
   <td>
   <a href="status.php?id=<?php echo $row['id'];?>"></a>
   <label class="switch">
  <input type="checkbox" checked value="1" name="status">
  <span class="slider round"></span>
</label>
</td>
   <td><a href="modify_course_from.php?Id=<?php echo $row['id'];?>"class="btn btn-orange"><i class="fa fa-edit"></i></a></td>
   <!-- <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a> -->
  <td><a href="delete_courses.php?Id=<?php echo $row['id'];?>"class="btn btn-red"><i class="fa fa-trash"></i></a></td>

</tr>

 <?php } ?>                
                </table>
              </div>
          </div>



<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
  var checkbox = document.querySelector('input[type="checkbox"]');

  checkbox.addEventListener('change', function () {
    if (checkbox.checked) {
        alert("checked")
      console.log('Checked');
    } else {
      // do that
      console.log('Not checked');
    }
  });
});
</script> -->
<script src="public/js/main.js"></script>
</body>
</html>