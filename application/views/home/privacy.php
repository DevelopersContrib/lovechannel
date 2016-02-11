<?php $this->load->view('shared/header'); ?>
<style>
html,
body {
    width: 100%;
    height: 100%;
}

body {
    font-family: Merriweather,'Helvetica Neue',Arial,sans-serif;
}

hr {    
    border-color: #f05f40;
    border-width: 3px;
}

hr.light {
    border-color: #fff;
}

a {
    color: #f05f40;
    -webkit-transition: all .35s;
    -moz-transition: all .35s;
    transition: all .35s;
}

a:hover,
a:focus {
    color: #eb3812;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
}

p {
    margin-bottom: 20px;
    font-size: 16px;
    line-height: 1.5;
}

.bg-primary {
    background-color: #f05f40;
}

.bg-dark {
    color: #fff;
    background-color: #222;
}

.text-faded {
    color: rgba(255,255,255,.7);
}

section {
    padding: 100px 0;
}

aside {
    padding: 50px 0;
}

.no-padding {
    padding: 0;
}

.navbar-default {
    border-color: rgba(34,34,34,.05);
    font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
    background-color: #EE4B28;
    -webkit-transition: all .35s;
    -moz-transition: all .35s;
    transition: all .35s;
}

.navbar-default .navbar-header .navbar-brand {
    text-transform: uppercase;
    font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
    font-weight: 700;
    color: #f05f40;
}

.navbar-default .navbar-header .navbar-brand:hover,
.navbar-default .navbar-header .navbar-brand:focus {
    color: #eb3812;
}

.navbar-default .nav > li>a,
.navbar-default .nav>li>a:focus {
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    color: #222;
}

.navbar-default .nav > li>a:hover,
.navbar-default .nav>li>a:focus:hover {
    color: #f05f40;
}

.navbar-default .nav > li.active>a,
.navbar-default .nav>li.active>a:focus {
    color: #f05f40!important;
    background-color: transparent;
}

.navbar-default .nav > li.active>a:hover,
.navbar-default .nav>li.active>a:focus:hover {
    background-color: transparent;
}

@media(min-width:768px) {
    .navbar-default {
        border-color: rgba(255,255,255,.3);
        background-color: #EE4B28;
    }

    .navbar-default .navbar-header .navbar-brand {
        color: rgba(255,255,255,.7);
    }

    .navbar-default .navbar-header .navbar-brand:hover,
    .navbar-default .navbar-header .navbar-brand:focus {
        color: #fff;
    }

    .navbar-default .nav > li>a,
    .navbar-default .nav>li>a:focus {
        color: rgba(255,255,255,.7);
    }

    .navbar-default .nav > li>a:hover,
    .navbar-default .nav>li>a:focus:hover {
        color: #fff;
    }

    .navbar-default.affix {
        border-color: rgba(34,34,34,.05);
        background-color: #fff;
    }

    .navbar-default.affix .navbar-header .navbar-brand {
        font-size: 14px;
        color: #f05f40;
    }

    .navbar-default.affix .navbar-header .navbar-brand:hover,
    .navbar-default.affix .navbar-header .navbar-brand:focus {
        color: #eb3812;
    }

    .navbar-default.affix .nav > li>a,
    .navbar-default.affix .nav>li>a:focus {
        color: #222;
    }

    .navbar-default.affix .nav > li>a:hover,
    .navbar-default.affix .nav>li>a:focus:hover {
        color: #f05f40;
    }
}

header { 
	position: relative;
  width: 100%;
  min-height: auto;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
  background-position: center;
  background:url("https://rdbuploads.s3.amazonaws.com/backgrounds/heart-wallpaper-1920x1080.jpg");
  text-align: left;
  color: white;
}

header .headercontent {
    position: relative;
    width: 100%;
    padding: 250px 15px;
    text-align: left;
}
header .headercontent h1 {
 font-size:50px;
}

@media(min-width:768px) {
    header {
        min-height: 100%;
    }

    header .header-content {
        position: absolute;
        top: 50%;
        padding: 0 50px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    header .header-content .header-content-inner {
        margin-right: auto;
        margin-left: auto;
        max-width: 1000px;
    }

    header .header-content .header-content-inner p {
        margin-right: auto;
        margin-left: auto;
        max-width: 80%;
        font-size: 18px;
    }
}

.section-heading {
    margin-top: 0;
}

.service-box {
    margin: 50px auto 0;
    max-width: 400px;
}

@media(min-width:992px) {
    .service-box {
        margin: 20px auto 0;
    }
}

.service-box p {
    margin-bottom: 0;
}

.call-to-action h2 {
    margin: 0 auto 20px;
}

.text-primary {
    color: #f05f40;
}

.no-gutter > [class*=col-] {
    padding-right: 0;
    padding-left: 0;
}

.btn-default {
    border-color: #fff;
    color: #222;
    background-color: #fff;
    -webkit-transition: all .35s;
    -moz-transition: all .35s;
    transition: all .35s;
}

.btn-default:hover,
.btn-default:focus,
.btn-default.focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
    border-color: #ededed;
    color: #222;
    background-color: #f2f2f2;
}

.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
    background-image: none;
}

.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
    border-color: #fff;
    background-color: #fff;
}

.btn-default .badge {
    color: #fff;
    background-color: #222;
}

.btn-primary {
    border-color: #f05f40;
    color: #fff;
    background-color: #f05f40;
    -webkit-transition: all .35s;
    -moz-transition: all .35s;
    transition: all .35s;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary.focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
    border-color: #ed431f;
    color: #fff;
    background-color: #ee4b28;
}

.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
    background-image: none;
}

.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
    border-color: #f05f40;
    background-color: #f05f40;
}

.btn-primary .badge {
    color: #f05f40;
    background-color: #fff;
}

.btn {
    border: 0;
    border-radius: 300px;
    text-transform: uppercase;
    font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
    font-weight: 700;
}

.btn-xl {
    padding: 15px 30px;
}

::-moz-selection {
    text-shadow: none;
    color: #fff;
    background: #222;
}

::selection {
    text-shadow: none;
    color: #fff;
    background: #222;
}

img::selection {
    color: #fff;
    background: 0 0;
}

img::-moz-selection {
    color: #fff;
    background: 0 0;
}

body {
    webkit-tap-highlight-color: #222;
}
.express-lists {
	margin-top: 25px;
}
.express-lists p {
margin-bottom:6px;
text-align:left;
}
.footer-dark-1 {
    color: #fff;
    padding: 25px 0 25px;
    background-color: #333;
}
.footer-dark-2 {
    color: #fff;
    padding: 25px 0 20px;
    background-color: #222;
}
.socials-ul .fa {
font-size: 35px;
}
.sub-nav {
background:#E41B17;
color:#ffffff;
padding:5px 0px;
text-align:center;
}
.about-year{
   
    border: 2px solid #6d6d6d;
    display: inline-block;
    font-size: 17px;
    height: 120px;
    margin-bottom: 40px;
    padding: 25px;
    width: 120px;
    
}
.about-year span {
    font-size: 50px;
    font-weight: 600;
    left: -4px;
    letter-spacing: -5px;
    position: relative;
    top: -85px;
}

.bg-black {
    font-family: "Open Sans",sans-serif;
    background: #232323 !important;
}

.font-weight-100 {
    font-weight: 100 !important;
}

.letter-spacing-1 {
    letter-spacing: 1px !important;
}
.white-text {
    color: #FFF !important;
}
.title-small {
    font-size: 20px !important;
    line-height: 30px !important;
}
</style>

	<section class="bg-black" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center terms" style="padding:120px 0px 100px 0px">
					<h1>LoveChannel.com</br>Privacy Policy</h1>               
					<div>
						<h3 class="text-left">LoveChannel.com Privacy Policy</h3>
						<p class="text-justify">
							This privacy policy sets out how LoveChannel.com uses and protects any information that you give LoveChannel.com when you use this website. LoveChannel.com is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement. LoveChannel.com may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from 18th of January, 2012. 
						</p>
					</div>
					<div>
						<h3 class="text-left">What we collect </h3>
						<p class="text-justify">
							We may collect the following information:    
						</p>
						<ul class="list-unstyled text-left">
							<li><i class="fa fa-check"></i> name and job title </li>
							<li><i class="fa fa-check"></i> contact information including email address </li>
							<li><i class="fa fa-check"></i> demographic information such as postcode, preferences and interests </li>
							<li><i class="fa fa-check"></i> other information relevant to customer surveys and/or offers </li>
						</ul>                    
					</div>
					<div>
						<h3 class="text-left">What we do with the information we gather</h3>
						<p class="text-justify">
							We require this information to understand your needs and provide you with a better service, and in particular for the following reasons: 
						</p>
						<ul class="list-unstyled text-left">
							<li><i class="fa fa-check"></i> Internal record keeping.</li>
							<li><i class="fa fa-check"></i> We may use the information to improve our products and services.</li>
							<li><i class="fa fa-check"></i> We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</li>
							<li><i class="fa fa-check"></i> From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone, fax or mail. We may use the information to customise the website according to your interests.</li>
						</ul>                    
					</div>
					<div>
						<h3 class="text-left">Security</h3>
						<p class="text-justify">
							We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online. 
						</p>                                        
					</div>
					<div>
						<h3 class="text-left">How we use cookies </h3>
						<p class="text-justify">
							A cookie is a small file which asks permission to be placed on your computer’s hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.We use traffic log cookies to identify which pages are being used. This helps us analyse data about webpage traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website. 
						</p>                                        
					</div>
					<div>
						<h3 class="text-left">Links to other websites </h3>
						<p class="text-justify">
							Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.  
						</p>                                        
					</div>
					<div>
						<h3 class="text-left">Controlling your personal information </h3>
						<p class="text-justify">
							You may choose to restrict the collection or use of your personal information in the following ways:   
						</p>
						<ul class="list-unstyled text-left">
							<li><i class="fa fa-check"></i> whenever you are asked to fill in a form on the website, look for the box that you can click to indicate that you do not want the information to be used by anybody for direct marketing purposes. </li>
							<li><i class="fa fa-check"></i> if you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to us.
							We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.You may request details of personal information which we hold about you under the Data Protection Act 1998. A small fee will be payable. If you would like a copy of the information held on you please contact us.If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible, at the above address. We will promptly correct any information found to be incorrect. 
							</li>                        
						</ul>                                        
					</div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
 <?php $this->load->view('shared/footer'); ?>