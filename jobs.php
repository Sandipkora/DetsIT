<?php
include "menu.php";
?>
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Job Openings</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->
<?php
$j = "select * from job_openings";
$job = mysqli_query($link,$j);
$fet = mysqli_fetch_assoc($job);
?>
<!-- blogs -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- blog post -->
      <?php while($fet = mysqli_fetch_assoc($job)) { ?>

      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="testadmin/img/<?php echo $fet['image']; ?>" alt="Post thumb">
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
            <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <?php } ?>
      <!-- blog post -->
    </div>
  </div>
</section>
<!-- /blogs -->

<!-- footer -->
<?php
include "footer.php";
?>