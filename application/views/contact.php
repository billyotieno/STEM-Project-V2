<!-- Header -->
<header id="sp2" class="center parallax-container dark" data-overlay="9">
    <div class="parallax"><img src="<?php echo base_url() ?>assets/img/contact/header2.jpg" alt=""></div>
    <div class="header-in">
        <div class="caption">
            <h5>Say Hello</h5>
            <h1>Get in touch with us</h1>
        </div>
        <img class="arrow" src="<?php echo base_url() ?>assets/img/arrow.svg" alt="">
    </div>
</header>

<!-- Contact --> 
<section id="c_contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>Fill out these forms and we will be in touch soon.</h4>
                <form class="contact-form" method="post" action="#something.php">
                    <div class="input-field col-sm-12">
                        <div class="form-group">
                            <input id="form-name" name="name" type="text" placeholder="Your Name *" required="required"
                                data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="input-field col-sm-6">
                        <div class="form-group">
                            <input id="form-email" name="email" type="email" placeholder="Email Address *" required="required"
                                data-error="Email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="input-field col-sm-6">
                        <div class="form-group">
                            <input id="form-tel" name="tel" type="tel" placeholder="Phone Number" data-error="Please provide real phone number.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="input-field col-sm-12">
                        <div class="form-group">
                            <textarea id="form-textarea" name="Message" id="" cols="30" rows="5" placeholder="Your message here *"
                                required="required" data-error="Message is required."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 center">
                        <input type="submit" value="Submit Form">
                        <div class="messages"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h5>Address</h5>
                <p>Ole Sangale Road, off Langata Road, in Madaraka Estate.
                </p>
                <a href="https://www.google.co.ke/maps/place/Caplora+Academy+Kenya/@-1.3100821,36.8103461,17z/data=!3m1!4b1!4m5!3m4!1s0x182f10f6010ace9b:0x2ed8412115331950!8m2!3d-1.3100821!4d36.8125348?hl=en">Visit on Google Maps</a>
                <hr>
                <h5>Phone</h5>
                <p>(+254)715 805 770</p>
                <hr>
                <h5>Email</h5>
                <p>info@caploracademy.co.ke</p>
            </div>
        </div>
    </div>
</section>

<div class="map-area">
    <div id="map"></div>
    <script src="<?php echo base_url() ?>assets/js/googleMap.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmSmQfSuDd2vAUHXg18NrPiobAgw0z9XI &amp;callback=initMap"
        async defer></script>
</div>