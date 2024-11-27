<!DOCTYPE html>
<html>

<?php 
    require './head.php'
    ?> 

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php 
    require './header.php'
    ?> 
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Welcome to Ifcoroorrepairs.com! We are a trusted and reliable provider of comprehensive roof repair solutions. With years of experience in the industry, our team of skilled professionals is dedicated to delivering top-notch services that exceed expectations. From minor repairs to complete roof restoration, we handle it all with precision and expertise. We prioritize customer satisfaction and ensure prompt, efficient service to protect your home or business from the elements. Trust Ifcoroorrepairs.com for reliable and affordable roof repairs that stand the test of time. Your satisfaction is our priority.
            </p>
            <a href="about.php">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->
  <?php 
  require './footer.php'
  ?> 
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>