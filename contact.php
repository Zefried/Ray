<?php include 'include/header.php' ?>
<section class="page-title" style="background-image: url(images/background/2.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="contact-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-details__right">
                    <div class="sec-title">
                        <span class="sub-title">Need any help?</span>
                        <h2>Get in touch with us</h2>
                    </div>
                    <ul class="list-unstyled contact-details__info">
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text">
                                <h6>Visit anytime</h6>
                                <span>Near Anath Ashram, Ambari Thana, <br>Guwahati-25</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-phone-plus"></span>
                            </div>
                            <div class="text">
                                <h6>Have any question?</h6>
                                <a href="tel:7908188716">+91 7908188716</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-envelope1"></span>
                            </div>
                            <div class="text">
                                <h6>Write email</h6>
                                <a href="mailto:">example@mail.com</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="sec-title contact_form">
                    <span class="sub-title">Send us email</span>
                    <h2>Feel free to write</h2>
                </div>
                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="#" method="post" novalidate="novalidate" style="padding: 20px;box-shadow: 0px 0px 10px #8080807d;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label>Name <small>*</small></label>
                                <input name="form_name" class="form-control" type="text">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label>Email <small>*</small></label>
                                <input name="form_email" class="form-control required email" type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label>Phone</label>
                                <input name="form_phone" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Message</label>
                        <textarea name="form_message" class="form-control required" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>

                    </div>
                </form>
                <!-- Contact Form Validation-->
            </div>
        </div>
    </div>
</section>
<?php include 'include/footer.php' ?>