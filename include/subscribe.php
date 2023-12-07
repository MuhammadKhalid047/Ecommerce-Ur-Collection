<?php
if (basename($_SERVER['PHP_SELF']) === 'index.php') {
?>
    <section class="subscribe-area">
        <div class="container">
            <div class="row justify-content-between subscribe-padding">
                <div class="col-xxl-3 col-xl-3 col-lg-4">
                    <div class="subscribe-caption">
                        <h3>Subscribe Newsletter</h3>
                        <p>Subscribe newsletter to get a discount on all products.</p>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                    <div class="subscribe-caption">
                        <form action="#">
                            <input type="text" placeholder="Enter your email">
                            <button class="subscribe-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-4">
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
