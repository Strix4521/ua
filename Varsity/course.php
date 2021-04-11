<!DOCTYPE html>
<html lang="en">
<?php include('assets/include/head.php');
?>
<!-- INCLUDE HEADER  -->
<?php include('assets/include/header.php');
?>
 <?php $conn=mysqli_connect("localhost","root","","ua");;
?>  
   <!-- Start menu -->
   <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>Varsity</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>            
            <li class="active">
              <a href="course.php" >Course <span></span></a>
              
            </li>           
            <li ><a href="gallery.php">Gallery</a></li>
           
            <li><a href="contact.php">Contact</a></li>
                      
          
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Course</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
               
            <?php
                  $query="select * from courses where status = 1";
                  $result=mysqli_query($conn,$query);
                  $rownum=mysqli_num_rows($result);
                  for($i=1;$i<=$rownum/4;$i++)
                  {?>
              <div class="row">
                    <?php 
                    for($j=1;$j<=4 and $j<=$rownum;$j++)
                    { 
                      $row= mysqli_fetch_array($result);
                      
                      ?>
                      
                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="admin/courses/<?php echo $row['image'] ?> " height="400px" width="260px" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#"><?php echo $row['name'] ?></a>
                      <span><i class="fa fa-clock-o"></i><?php echo $row['day'] ?></span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Description</a></h4>
                    <p><?php echo $row['detail'] ?></p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#"><?php echo $row['price'] ?></span>
                    </div>
                  </div>
                </div>
              </div>
              <?php }
                    ?>

              </div> 

              <?php }
                if($rownum%4!=0){ ?>
                  <div class="row"> <?php
                    for($j=1;$j<=$rownum%4;$j++)
                    { 
                      $row= mysqli_fetch_array($result);
                      
                      ?>

<div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="admin/courses/<?php echo $row['image'] ?> " height="400px" width="100px" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#"><?php echo $row['name'] ?></a>
                      <span><i class="fa fa-clock-o"></i><?php echo $row['day'] ?></span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Description</a></h4>
                    <p><?php echo $row['detail'] ?></p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#"><?php echo $row['price'] ?></span>
                    </div>
                  </div>
                </div>
              </div>

                   <?php }
                    ?>
              </div>
               <?php }
               ?>

            </div>


                
                  
                <!-- end course content container -->
                <!-- start course pagination -->
                <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span class="fa fa-angle-left"></span> Prev 
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                         Next <span class="fa fa-angle-right"></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end course pagination -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="#">Web Design</a></li>
                      <li><a href="">Web Development</a></li>
                      <li><a href="">Math</a></li>
                      <li><a href="">Physics</a></li>
                      <li><a href="">Camestry</a></li>
                      <li><a href="">English</a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Popular Course</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/1.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Medical Science</a></h4>                      
                          <span class="popular-course-price">$200.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Web Design</a></h4>                      
                          <span class="popular-course-price">$250.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/3.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Health & Sports</a></h4>                      
                          <span class="popular-course-price">$90.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

<!-- INCLUDE FOOTER  -->
 <?php include('assets/include/footer.php');
?>
<?php include('assets/include/script.php');
?>
</html>