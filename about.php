 <?php
include "menu.php";

?> 
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">About Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">DETS Stands for Department of Enigineering and Technological Studies. We are a group of students at University of Kalyani trying to help all engineering students in India in their carreer.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img class="img-fluid w-100 mb-4" style="height:600px ;" src="images/about/about-page.jpg" alt="about image">
        <h2 class="section-title">ABOUT OUR JOURNY</h2>
        <p>DETS-IT was started as part of a project in college but we also wanted to make this project somehow usefull as we will be investing our time in this project and this is how we came to an idea of combining the engineering students at one platform i.e DETS wehre students can get benefited in choosing their carreer.</p>
        <p>With DETS-IT Students will be able to get guidance in learning skills for the job which they are aspiring to persue in Skills and Jobs section also we will be posting the Free Courses which will be helpful for the students community.Also In QnA section students can ask their doubts regarding carreer or any coding problems.</p>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->
<section class="section-sm bg-primary">
  <div class="container">
    <div class="row">
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="60">0</h2>
          <h5 class="text-white">TEACHERS</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="50">0</h2>
          <h5 class="text-white">COURSES</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="1000">0</h2>
          <h5 class="text-white">STUDENTS</h5>
        </div>
      </div>
      <!-- funfacts item -->
    </div>
  </div>
</section>
<!-- /funfacts -->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">OUR MISSION</h2>
          <p>OUR Mission is to be the onse stop solution for all the engineering students and guide them in making their carreer in the field they aspire with proper information and helping them to develop skills that will be helpful in making their carreer.We also Aim to provide the proper platform for the engineering colleges to take the online classes in more effective and efficient way by bringing all the colleges to one platform. Which will be very helpful for the college professors and as well as student. Even iff students or professor are not being able to go college physically thenn they may use our platform to take that very class from their home.</p>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->
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
            <img class="card-img-top rounded-0" style="width: 300px;height: 300px;" src="img/<?php echo $inf['image']; ?>" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title"><?php echo $inf['name']; ?></h4>
              </a>
              <div class="d-flex justify-content-between">
                <span>Teacher</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <!-- teacher -->
      </div>
    </div>
  </section>
  <!-- /teachers -->

  <!-- copyright -->




<?php
include "footer.php";
?>