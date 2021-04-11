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
          <a class="navbar-brand" href="index.php"><i><img src="assets/img/logo/ua_logo.jpg" height="40px" width="70px" alt="img"></i><span> U.A High School</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>            
            <li class="dropdown">
              <a href="course.php" >Course <span></span></a>
              
            </li>           
            <li><a href="gallery.php">Gallery</a></li>
           
            <li><a href="contact.php">Contact</a></li>
                      
          
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->

  <!-- Start Slider -->
  <section id="mu-slider">
  <?php
     
     $query="select * from slider ";

    $sql=mysqli_query($conn, $query);

     while ($row=mysqli_fetch_assoc($sql)) {
 ?>
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
        <img src="admin/slider/<?php echo $row['image'] ?> " height="1080px" width="1920px" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4><?php echo $row['title'] ?></h4>
        <span></span>
        <h2><?php echo $row['sub_title'] ?></h2>
        <p><?php echo $row['description'] ?></p>
       
      </div>
    </div>
    

    <?php }
     ?>   
            
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Learn Online</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Expert Teachers</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Best Classrooms</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>About Us</h2>              
                  </div>
                  <!-- End Title -->
                  <p>U.A. is the #1 ranked high school for heroics and is considered as the top Hero Academy in Japan. Students are separated based on their abilities into specific Departments and Classes - A, B, C, D, E, F, G, H, I, J, and K.  </p>
                  <ul>
                    <li>U.A. was originally a day school, but it was later turned into a boarding school.</li>
                    <li>U.A. executes a six-day school week where the only day off is Sunday.</li>
                    <li>The U.A. High School student uniform consists of a long-sleeve, button-up white shirt, a gray jacket with blue-green stripes, and a red tie.</li>
                    <li>All U.A. students are required to wear this uniform properly. </li>
                 
                  </ul>
                  <p> At the entrance, there is a security wall nicknamed the "U.A. Barrier" that automatically closes if a person does not have a Student ID Card or Special Entry Permission ID. Many precautions have been made to keep members of the press and villains out.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="youtube.com/watch?v=Q8bmv-14OVI" target="mutube-video">
                  <img src="assets/img/ua-high.jpeg" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  

  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Latest Courses</h2>
              <p>Japanese, math, science and foreign languages, among other subjects, are all compulsory subjects. Students in every department study these core subjects and will change year by year.</p>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
            <?php
     
                $query="select * from courses where status = 1";

               $sql=mysqli_query($conn, $query);

                while ($row=mysqli_fetch_assoc($sql)) {
            ?>
              <div class="col-lg-4 col-md-4 col-xs-12">
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
             
              <?php } ?>   
            </div>
        
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->

  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>Our Teachers</h2>
              <p>Each of the U.A. High staff members has a quirk that has landed them among the most respected Pro Heroes, but some have a more powerful combination of capabilities than others.</p>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <?php
                  $query="select * from teachers";
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

                      <div class="col-lg-3 col-md-3  col-sm-6">
                        <div class="mu-our-teacher-single">
                          <figure class="mu-our-teacher-img">
                            <img src="admin/teacher/<?php echo $row['image'] ?> " height="265px" width="500px" alt="teacher img">
                            <div class="mu-our-teacher-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                            </div>
                          </figure>                    
                          <div class="mu-ourteacher-single-content">
                            <h4><?php echo $row['name'] ?></h4>
                            <span><?php echo $row['qualification'] ?></span>
                            <p><?php echo $row['description'] ?></p>
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

                      <div class="col-lg-3 col-md-3  col-sm-6">
                        <div class="mu-our-teacher-single">
                          <figure class="mu-our-teacher-img">
                            <img src="admin/teacher/<?php echo $row['image'] ?> " height="265px" width="300px" alt="teacher img">
                            <div class="mu-our-teacher-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                            </div>
                          </figure>                    
                          <div class="mu-ourteacher-single-content">
                            <h4><?php echo $row['name'] ?></h4>
                            <span><?php echo $row['qualification'] ?></span>
                            <p><?php echo $row['description'] ?></p>
                          </div>
                        </div>
                      </div>

                   <?php }
                    ?>
              </div>
               <?php }
               ?>
            </div> 
            <!-- End our teacher content -->           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End our teacher -->

  <!-- Start testimonial -->
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-1.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>John Doe</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-3.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Rebaca Michel</h4>
                  <span>Happy Parent</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-2.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Stev Smith</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

 
<!-- INCLUDE FOOTER  -->
  <?php include('assets/include/footer.php');
?>

<?php include('assets/include/script.php');
?>
  
</html>