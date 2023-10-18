
<?php 
  include 'header.php'
  ?><!-- End Header -->
    <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfoio Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Portfoio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <?php  
include 'db.php';
$id=$_GET['id'];

$query="SELECT * FROM project where id=$id";
$run=mysqli_query($conn,$query);
if($run)
{
   while($row=mysqli_fetch_assoc($run))
   {
 
?> 
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="admin\img-project\<?php echo $row['img'] ?>" alt="">
                </div>

                <!-- <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div> -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>:<?php echo $row['category']?></li>
                <li><strong>Client</strong>:<?php echo $row['client']?></li>
                <li><strong>Technology</strong>:<?php echo $row['technology']?></li>
                <li><strong>Project date</strong>:<?php echo $row['date']?></li>
                <li><strong>Project URL</strong>: <a class='btn btn-success' href="<?php echo $row['link1']?>" target="_blank"><i class='bx bx-link'></i> Click Me</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Portfolio Description</h2>
              <p>
              <?php echo $row['title_desc']?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
<?php }}?>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php 
  include 'footer.php'
  ?>