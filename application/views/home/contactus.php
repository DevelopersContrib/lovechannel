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
    background: #000000 !important;
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
			<h1 class="text-center">Contact Us</h1>
			<hr/>
			 <p class="text-center">You could contact us via social@lovechannel.com or our <a href="https://www.facebook.com/LoveChannel-736620499806944/">Facebook</a> or <a href="https://twitter.com/lovechannl">Twitter</a> page.</p>

            </div>
        </div>
    </section>
<script src="https://tools.contrib.com/cwidget?d=lovechannel.com&p=ur&c=f"></script>
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