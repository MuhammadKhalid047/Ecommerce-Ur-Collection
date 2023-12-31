<?php
    include 'include/header.php';
    include 'include/navbar.php';
?>
    <main>
      <div class="hero-area section-bg2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="slider-area">
                <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                  <div class="hero-caption hero-caption2">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                          <a href="index-2.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                          <a href="#">Contact</a>
                        </li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
              <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                    </div>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                </div>
              </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
              <div class="media contact-info">
                <span class="contact-info__icon">
                  <i class="ti-home"></i>
                </span>
                <div class="media-body">
                  <h3>City, Faisalabad.</h3>
                  <p>Faisalabad, PK 38000</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon">
                  <i class="ti-tablet"></i>
                </span>
                <div class="media-body">
                  <h3>+92 000 000 0000</h3>
                  <p>Mon to Fri 9am to 6pm</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon">
                  <i class="ti-email"></i>
                </span>
                <div class="media-body">
                  <h3>
                    <a href="" class="__cf_email__" data-cfemail="">XYZ@gmail.com</a>
                  </h3>
                  <p>Send us your query anytime!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include('include/footer.php'); 
        include('include/script.php');
    ?>