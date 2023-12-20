    <?php

    include "menu.php";

    ?>



    <?php

    $link = mysqli_connect("localhost","root","","dets");
    $scholar = "select * from scholarship order by id desc limit 4";
    $result = mysqli_query($link,$scholar);
    $res = mysqli_fetch_array($result);

    ?>



    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg" style="height:860px;">
      <div class="container">
        <div class="hero-slider">
          <!-- slider item -->
          <?php
           while($arr = mysqli_fetch_array($result))
          {
            ?>
          <div class="hero-slider-item">
            <div class="row">
              <div class="col-md-8">
                <h2 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1"><?php echo $arr['meritname'];?></h2>
                <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4"><?php echo $arr['disc'] ?></p>

                 <?php if(!empty($_SESSION['sname']))
                  {?>
                <a href="<?php echo $arr['link'] ?>" target="_blank" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
                <?php  }else{ ?>
                    <a href="login.php" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
               <?php  } ?>

              </div>
            </div>
          </div>
          <?php } ?>
          <!-- slider item -->

        </div>
      </div>
    </section>
    <!-- /hero slider -->

    <!-- banner-feature -->
    <section class="bg-gray overflow-md-hidden">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-xl-4 col-lg-5 align-self-end">
            <img class="img-fluid w-100" src="images/banner/featured.jpg" alt="banner-feature">
          </div>
          <div class="col-xl-8 col-lg-7">
            <div class="row feature-blocks bg-gray justify-content-between">
              <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                <h3 class="mb-xl-4 mb-lg-3 mb-4">Scholorship News</h3>
                  <p><?php echo $res['meritname'] ?></p>
                  <p><?php echo $res['link'] ?></p>
                  <p>Last date to apply: <?php echo $res['ldate'] ?></p>

              </div>
    <?php 

    $notice = "select * from notice order by id desc limit 1";
    $qry = mysqli_query($link,$notice);
    $box = mysqli_fetch_array($qry);

    ?>
              <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                <h3 class="mb-xl-4 mb-lg-3 mb-4">Notice Board</h3>
                <p><?php echo $box['message'] ?></p>
              </div>
    <?php    

    $ass = "select * from assingment order by id desc limit 1";
    $qery = mysqli_query($link,$ass);
    $final = mysqli_fetch_array($qery);


    ?>
              <div class=" text-center text-sm-left">
                <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                  <?php 
                  if(!empty($_SESSION['sname']))
                  {

                  ?>
                <h3 class="mb-xl-4 mb-lg-3 mb-4">Assingment</h3>
                  <?php
                  $rsql = "select * from registered_students where email ='".$_SESSION['sname']."'";
                  $info = mysqli_query($link,$rsql);
                  $data = mysqli_fetch_array($info);
                  $ans = "select * from assingment where stream ='".$data['stream']."' && batch = '".$data['batch']."' limit 3";
                  $info_1 = mysqli_query($link,$ans); 
                      ?>
                  <table width="100%">
                <tr>
                    <th>Question</th>
                    <th>Due Date</th>
                </tr>
                  <?php
                  while($report = mysqli_fetch_array($info_1)){
                      ?>
            
                <tr>
                         <td>  <?php echo $report['question'];?>  </td>
                          <td>  <?php echo $report['duedate'];?>  </td>
                </tr>
            
                  
                  <?php 
                            }?>
                      </table>
                 
                      
                 <?php }else{ ?>
                        <p><?php echo "PLEASE LOGIN TO SEE THE ASSINGED TASK FOR YOU.PLEASE CHOOSE CORRECT STREAM AND BRANCH DURING REGISTRATION!!!"; ?></p>
               
                    <?php   }  ?>

            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /banner-feature -->

    <!-- about us -->
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2 order-md-1">
            <h2 class="section-title">About DETS-IT</h2>
            <p>In the early 1950s, the township of Kalyani was developed as the brainchild of Dr. Bidhan Chandra Roy, the then Chief Minister of West Bengal. Kalyani was planned to grow as a satellite town in the long-term perspective plan of the Calcutta Urban Agglomeration. For planned development of the town, the need for emphasising education and health infrastructure was duly emphasised in the master plan and the University of Kalyani was established in November 1960, as a unitary university with the faculties of Arts, Science, Education, and Agriculture.</p>
            <a href="about.php" class="btn btn-primary-outline nav-link">Learn more</a>
          </div>
          <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
            <img class="img-fluid w-100" src="images/about/about-us.jpg" alt="about image">
          </div>
        </div>
      </div>
    </section>
    <!-- /about us -->
  <!-- upcoming classes -->
<?php

if(!empty($_SESSION['sname'])){

$rsql = "select * from registered_students where email ='".$_SESSION['sname']."'";
$info = mysqli_query($link,$rsql);
$data = mysqli_fetch_array($info);

 $msql = "select * from part1 where batch = '".$data['batch']."'";
$fry = mysqli_query($link,$msql);
$dat = mysqli_fetch_assoc($fry); 

$ksql = "select * from schedule where batch ='".$data['batch']."' limit 3";
$dry = mysqli_query($link,$ksql);
    
?>
<section class="section bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex align-items-center section-title justify-content-between">
              <h2 class="mb-0 text-nowrap mr-3">Upcoming Classes</h2>
              <div class="border-top w-100 border-primary d-none d-sm-block"></div>
              <div>
                <a href="#" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
              </div>
            </div>
          </div>
        </div>

    <div class="row justify-content-center">
      <!-- event -->
<?php
        
while($sdata = mysqli_fetch_assoc($dry)){ 
?>
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          
      <div class="card border-0 rounded-0 hover-shadow">
         <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="testadmin/img/<?php echo $dat['subimg'] ?>" alt="event thumb">
            <div class="card-date"><span><?php echo $sdata['sdate']; ?></span><br><?php echo $sdata['time']; ?></div>
          </div>
         
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-book text-primary mr-2"></i> <?php echo strtoupper($sdata['teacher']); ?> </p>
            <a href="upcoming.php"><h4 class="card-title"><?php echo  strtoupper($sdata['subject']) ?></h4></a>
          </div>
 
          </div>
      
          
          
        </div>
      <!-- event -->
     <?php } ?>
    </div>
          
        <!-- mobile see all button -->
        <div class="row">
          <div class="col-12 text-center">
            <a href="course.php" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
          </div>
        </div>
      </div>
    </section>

<?php }?>
    <!-- courses -->
    <section class="section-sm">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex align-items-center section-title justify-content-between">
              <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
              <div class="border-top w-100 border-primary d-none d-sm-block"></div>
              <div>
<?php
$q = "select * from part1 limit 4";
$as = mysqli_query($link,$q);
$fe = mysqli_fetch_assoc($as);
?>


                <a href="course.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
              </div>
            </div>
          </div>
        </div>
        <!-- course list -->
        

    <div class="row justify-content-center">
      <!-- course item -->
      <?php while($fe = mysqli_fetch_assoc($as)) { ?>

      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" style="height:200px" src="testadmin/img/<?php echo $fe['subimg']; ?>" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo $fe['sdate']; ?></li>
              <li class="list-inline-item"><a class="text-color" href="#"><?php echo $fe['stream']; ?></a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title"><?php echo $fe['subject']; ?></h4>
            </a>
            <p class="card-text mb-4">Teacher's Contact: <?php echo $fe['contact']; ?> <br>Subject Code: <?php echo $fe['subcode']; ?></p>
            <a href="testadmin/img/<?php echo $fe['syllabus']; ?>" target="_blank" class="btn btn-primary btn-sm">Syllabus</a>
          </div>
        </div>
        
      </div>
      <?php } ?>
<!-- /course list -->
        <!-- mobile see all button -->
        <div class="row">
          <div class="col-12 text-center">
            <a href="course.php" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /courses -->

    <?php
$t = "select * from registration";
$tec = mysqli_query($link,$t);
$inf = mysqli_fetch_assoc($tec);
?>

<!-- teachers -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="section-title">Our Teachers</h2>
          </div>
          <!-- teacher -->
           <?php while($inf = mysqli_fetch_assoc($tec)) { ?>
 
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card border-0 rounded-0 hover-shadow">
              <img class="card-img-top rounded-0"  style="width: 300px;height: 300px;" src="img/<?php echo $inf['image']; ?>" alt="teacher">
              <div class="card-body">
                <a href="teacher-single.html">
                  <h4 class="card-title"><?php echo $inf['name']; ?></h4>
                </a>
                <p>Teacher</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- teacher -->
          
        </div>
      </div>
    </section>
    <!-- /teachers -->


    <?php
$j = "select * from job_openings";
$job = mysqli_query($link,$j);
$fet = mysqli_fetch_assoc($job);
?>


    <!-- Career -->
    <section class="section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="section-title">Latest Job Openings</h2>
          </div>
        </div>
        <div class="row justify-content-center">
      <!-- blog post -->
<?php while($fet = mysqli_fetch_assoc($job)) { ?>
      <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="testadmin/img/<?php echo $fet['image']; ?>" alt="company logo">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">Posted on: <?php echo $fet['Pdate']; ?></li>
            </ul>
            <a href="blog-single.html">
              <h4 class="card-title"><?php echo $fet['Position']; ?></h4>
            </a>
            <p class="card-text">Experience: <?php echo $fet['Experience']; ?> Years<br> Job Location: <?php echo $fet['location']; ?><br>Batch Allowed:  <?php echo $fet['batch']; ?><br>Stream's: <?php echo $fet['stream']; ?></p>
            <a href="jobs.php" target="_blank" class="btn btn-primary btn-sm">Read more</a>
          </div>
        </div>
      </article>
      <?php } ?>

      <!-- blog post -->
    </div>
      </div>
    </section>
    <!-- /blog -->

    <!-- footer -->
    <footer>
      <!-- newsletter -->


</body>
</html>

<?php

include "footer.php";

?>