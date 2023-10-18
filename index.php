<?php
include 'header.php';
?>
<!-- caurasal start -->
<div >
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets\img\1a.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Dhyanyog</h5>
          <p>A Doorway To Self Realization</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets\img\1.jpg" alt="Second slide">
        <!-- Single item -->
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets\img\2.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>

<!-- caurasal end -->
<!-- chalenge of my  -->
<div class="container">
<div class="row jumbotron  ">
  <div class="col-lg-6 col-sm-12 ">
  <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted autoplay loop></video>
  </div>
  <div class="col-lg-6 col-sm-12">
    <div class="card-body">
      <h5 class="card-title "><b>Dhyanyog(84 Days Challenge)</b></h5>
          <p class="card-text">A Doorway To Self Realization.Dhyanyog unique and revolutionary concept , never done in history before .Diverse meditation
             techniques to empower you , transform you , unlock your inner peace .</p>
          
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  </div>
</div>
<!-- chalenge of my  -->

<!-- <div class="col">
      <div class="card">
        <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted autoplay loop></video>

        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div> -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">
    <div class="section-title">
      <h2>Contact</h2>
      <p>If you have any questions, please contact us with our address and fill up the form.</p>
    </div>

    <div class="row" data-aos="fade-in">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Sri Krishna Apartment, Shiv puri colony Lower chutia Ranchi, Jharkhand, India-834001</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>kundankumar5678k.s@gmail.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+19 9507701487</p>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.043216610372!2d85.34512837486032!3d23.350448804013983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e18599a9b341%3A0x711ed4de22aae33f!2sSri%20Krishna%20Apartment!5e0!3m2!1sen!2sin!4v1694768246814!5m2!1sen!2sin"
            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          <!-- <iframe src="https://maps.app.google/bDrY7CiGmAGrH95J7"  -->
        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include 'footer.php';
?>