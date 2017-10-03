 <!-- Our Program -->
 <!-- start of header -->
<header id="sp2" class="center dark1">
    <div class="header-in">
        <div class="caption">
            <h1>Join our programs</h1>
            <h6>Leave us with your details and we shall contact you immediately.</h6>
        </div>
        <img class="arrow" src="<?php echo base_url(); ?>/assets/img/arrow.svg" alt="">
    </div>
</header>

<!-- Start of Section -->
<section id="c_contact" class="halfarea">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-8 col-md-offset-5 col-sm-offset-4 title">
                <h2>Leave us with your details</h2>
                <h4>We’d love to take you through our program.</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-8 col-md-offset-5 col-sm-offset-4">
                <form class="contact-form" method="post" action="http://dev.premonday.com/arisn/contact.php">
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
                            <input id="form-name" name="Institution" type="text" placeholder="Name of Institution *" required="required"
                                data-error="Institution is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="input-field col-sm-12">
                        <div class="form-group">
                                <select name="Programs" id="form-name" data-error="Institution is required">
                                    <option value="0">TechMakers Kids</option>
                                    <option value="1">Speech Contests</option>
                                </select>
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
        </div>
    </div>
    <div class="col-md-4 col-sm-3 imagearea">
        <img class="imagearea-img" src="<?php echo base_url(); ?>/assets/img/generic1.jpg" alt="">
    </div>
</section>