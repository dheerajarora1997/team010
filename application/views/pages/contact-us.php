<?php include 'main_header.php'; ?>
<body>
    <?php include 'header.php'; ?>
    <nav aria-label="breadcrumb" class="w-100 float-left">
        <ol class="breadcrumb parallax justify-content-center" data-source-url="img/banner/parallax.jpg" style="background-image: url(&quot;img/banner/parallax.jpg&quot;); background-position: 50% 0.809717%;">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">contact us</li>
        </ol>
    </nav>
    <div class="main-content w-100 float-left">
        <div class="container">
            <div class="row">
                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container col-sm-12 mb-50" style="height: 500px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.8580426946874!2d77.05901038885497!3d28.634016399999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04e7a799716d%3A0x97f587b71ed42ec1!2sPolice%20Lines%20Vikaspuri!5e0!3m2!1sen!2sin!4v1685381334236!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!--Google Maps-->
                <div class="contact-form-area col-sm-7">
                    <div class="contact-form-inner pt-0">
                        <h4 class="">Tell Us Your Project</h4>
                        <form id="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="float-left">Name<span class="required">*</span></label>
                                    <input type="text" name="name" id="name" class="float-right" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="last_name" class="float-left">Phone<span class="required">*</span></label>
                                    <input type="tel" name="last_name" id="last_name" class="float-right" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="float-left">Email<span class="required">*</span></label>
                                    <input type="text" name="email" id="email" class="float-right" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="subject" class="float-left">Subject<span class="required">*</span></label>
                                    <input type="text" name="subject" id="subject" class="float-right" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="message" class="float-left">Message</label>
                                    <textarea name="message" id="message" class="float-right"></textarea>
                                </div>
                            </div>
                            <input type="submit" class="submit-btn default-btn btn-primary btn" value="Send Email">
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>
                <div class="contact-address col-sm-5">
                    <div class="contact-inner float-left w-100">
                        <div class="contact-information">
                            <h4 class="mb-0">Contact us</h4>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu vehicula turpis. Donec semper, nunc a imperdiet sollicitudin, lacus arcu semper nibh, non fermentum risus est quis augue.</p> -->
                            <div class="contact-wrapper">
                                <div class="contact-list">
                                    <i class="material-icons">place</i>
                                    <span>Address :  E/77 Uttam Nagar, Near by 863 Bus Stop. New Delhi, India 110059</span>
                                </div>
                                <div class="contact-list">
                                    <i class="material-icons">call</i>
                                    <span>+91 704-211-2485</span>
                                </div>
                                <div class="contact-list">
                                    <i class="material-icons">email</i>
                                    <span>tanancam28@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="working-time">
                            <h5>Working hours</h5>
                            <div>
                                <div>Monday – Saturday</div>
                                <div>09 A.M. – 07 P.M.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="block-newsletter">
        
    </div>
    <?php include 'footer.php';?> 
    <!-- Footer -->  
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/lightbox-2.6.min.js"></script>
    <script src="js/ResizeSensor.min.js"></script>
    <script src="js/theia-sticky-sidebar.min.js"></script>
    <script src="js/inview.js"></script>
    <script src="js/cookiealert.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ac1aabb4b401e45400e4197/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>