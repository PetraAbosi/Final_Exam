<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
  
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src='js/modal.js'></script>
    <script src='js/TMForm.js'></script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <a href="index.html">
                                    <img src="images/logo.png" alt="Logo"/>
                                </a>
                            </h1>
                        </div>
                        <nav class="nav put-right">
                            <ul class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li>
                                    <a href="about.php">About</a>
                                    <!--<ul>
                                        <li><a href="#">Lorem ipsum</a></li>
                                        <li><a href="#">Dolor sit amet</a>
                                        <li><a href="#">Ctetur adipisicing</a>
                                        <li><a href="#">Elit sed do</a>
                                            <ul>
                                                <li><a href="#">Iusmod tempor</a></li>
                                                <li><a href="#">Incididunt ut labore</a></li>
                                                <li><a href="#">Et dolore magna</a></li>
                                                <li><a href="#">Aliqua Ut enim</a></li>
                                                <li><a href="#">Minim veniam</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                </li>
                                <!-- <li><a href="services.html">Services</a></li>-->
                                <li class="current"><a href="contacts.php">Contacts</a></li>
                                <li><a href="log_in/login.php">Log In/ Register</a></li> 
                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September08, 2014!</div>
        <div class="container">
            <div class="row wrap_11">
                <div class="grid_12">
                    <h2 class="header_2 indent_4">Find Us</h2>
                </div>
            </div>
        </div>
        <div class="bg_1 wrap_17 wrap_19">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <iframe class="map"
                                src= "images/location.jpg"
                                style="border:0">
                        </iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="grid_6">
                        <div class="wrap_18">
                            <h2 class="header_2 indent_5">
                                Contact Info
                            </h2>
                            <address>
                                <p class="text_7 color_6">
                                    Find out more from our Social Media Platforms
                                </p>
                               
                                <p class="text_8">
                                
                                    Ministry of Finance </br>
                                    Finance Drive, Accra. <br/>
                                    P. O. Box M40, Accra - Ghana <br/>
                                    GA-144-2024 <br/>
                                    Telephone: +1 800 603 6035 <br/>
                                    FAX: +233 302-747-197 <br/>
                                    E-mail: info@mofep.gov.gh</br>
                                    Website:<a href="https://www.mofep.gov.gh/">Link</a>
                                </p>
                            </address>
                        </div>
                    </div>
                   <!-- <div class="grid_6">
                        <div class="wrap_18">
                            <h2 class="header_2 indent_2">
                                Contact Form
                            </h2>
                            <form id="contact-form">
                                <div class="contact-form-loader"></div>
                                <fieldset>
                                    <div class="row">
                                        <div class="grid_2">
                                            <label class="name">
                                                <input type="text" name="name" placeholder="Name:" value=""
                                                       data-constraints="@Required @JustLetters"/>
                                                <span class="empty-message">*This field is required.</span>
                                                <span class="error-message">*This is not a valid name.</span>
                                            </label>
                                        </div>
                                        <div class="grid_2">
                                            <label class="email">
                                                <input type="text" name="email" placeholder="E-mail:" value=""
                                                       data-constraints="@Required @Email"/>
                                                <span class="empty-message">*This field is required.</span>
                                                <span class="error-message">*This is not a valid email.</span>
                                            </label>
                                        </div>
                                        <div class="grid_2">
                                            <label class="phone">
                                                <input type="text" name="phone" placeholder="Phone:" value=""
                                                       data-constraints="@JustNumbers"/>
                                                <span class="empty-message">*This field is required.</span>
                                                <span class="error-message">*This is not a valid phone.</span>
                                            </label>
                                        </div>
                                    </div>
                                    <label class="message">
                                        <textarea name="message" placeholder="Message:"
                                                  data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                        <span class="empty-message">*This field is required.</span>
                                        <span class="error-message">*The message is too short.</span>
                                    </label>
                                    <div class="btn-wrap">
                                        <a class="btn_3" href="#" data-type="reset">clear</a>
                                        <a class="btn_3" href="#" data-type="submit">send</a>
                                    </div>
                                </fieldset>
                                <div class="modal fade response-message">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Modal title</h4>
                                            </div>
                                            <div class="modal-body">
                                                You message has been sent! We will be in touch soon.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="container">
            <div class="row wrap_9 wrap_4 wrap_10">
                <div class="grid_12">
                    <div class="header_1 wrap_3 color_3">
                       <!-- Get in Touch
                    </div>
                    <div class="box_3">
                        <ul class="list_1">
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-google-plus" href="#"></a></li>
                            <li><a class="fa fa-pinterest" href="#"></a></li>
                        </ul>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </section>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
            <p class="info text_4 color_4">
                    © <span id="copyright-year">copyright 2020</span> | <a href="https://www.mofep.gov.gh/">Privacy Policy</a> <br/>
                    Website designed by <a href="https://www.linkedin.com/mynetwork/" rel="nofollow">LinkedIn</a> <br/>

                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>
