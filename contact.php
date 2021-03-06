<?php /*Template Name: Contact*/ ?>
<?php get_header(); ?>

 <div id="subheader">
        <h1>Contact Us</h1>
    </div>
    <!-- subheader close -->

    <div id="map-container">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=16+Riverside+Rd,+Singapore&amp;sll=-2.547988,118.037109&amp;sspn=29.394918,50.756836&amp;ie=UTF8&amp;geocode=Fb8IFgAdu40vBg&amp;split=0&amp;hq=&amp;hnear=16+Riverside+Rd,+Singapore&amp;ll=1.444031,103.779771&amp;spn=0.014522,0.024784&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=false"></iframe>
    </div>

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <h4>Get in touch with us now!</h4>
                    Feel free to contact us by contact to get more information.<br />
                    <br />
                    <div class="contact_form_holder">
                        <form id="contact" class="row" name="form1" method="post" action="#">

                            <div class="span4">
                                <label>Name</label>
                                <input type="text" class="full" name="name" id="name" />
                            </div>

                            <div class="span4">
                                <label>Email <span class="req">*</span></label>
                                <input type="text" class="full" name="email" id="email" />
                                <div id="error_email" class="error">Please check your email</div>
                            </div>

                            <div class="span8">
                                <label>Message <span class="req">*</span></label>
                                <textarea cols="10" rows="10" name="message" id="message" class="full"></textarea>
                                <div id="error_message" class="error">Please check your message</div>
                                <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                <div id="mail_failed" class="error">Error, email not sent</div>

                                <p id="btnsubmit">
                                    <input type="submit" id="send" value="Send" class="btn btn-large" /></p>
                            </div>


                        </form>
                    </div>

                </div>

                <div id="sidebar" class="span4">
                    <!-- widget category -->
                    <!-- widget tags -->
                    <!-- widget text -->
                    <div class="widget widget-opening-hours">
                        <h4 class="title"><span>Opening Hours</span></h4>
                        <ul class="opening-hours">
                            <li><span class="op-days">Sunday - Thursday</span><span class="op-time">08:00 - 20:00</span></li>
                            <li><span class="op-days">Friday</span><span class="op-time">10:00 - 21:00</span></li>
                            <li><span class="op-days">Saturday</span><span class="op-time">10:00 - 23:00</span></li>
                            <li><span class="op-days">Monday</span><span class="op-time">10:00 - 24:00</span></li>

                        </ul>
                    </div>

                    <div class="widget widget-text">
                        <h4 class="title"><span>Our Address</span></h4>
                        <address>
                            20 Main Street, Melbourne
                        <span><strong>Phone:</strong>(200) 333 8890</span>
                            <span><strong>Fax:</strong>(200) 333 8892</span>
                            <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                            <span><strong>Web:</strong><a href="#test">http://example.com</a></span>
                        </address>

                        <div class="social-icons">
                            <a href="#">
                                <img src="img/social-icons/facebook.png" alt="" /></a>
                            <a href="#">
                                <img src="img/social-icons/twitter.png" alt="" /></a>
                            <a href="#">
                                <img src="img/social-icons/dribbble.png" alt="" /></a>
                            <a href="#">
                                <img src="img/social-icons/blogger.png" alt="" /></a>
                            <a href="#">
                                <img src="img/social-icons/youtube.png" alt="" /></a>
                            <a href="#">
                                <img src="img/social-icons/vimeo.png" alt="" /></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

<?php get_footer(); ?>