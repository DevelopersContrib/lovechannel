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
  background:url("https://rdbuploads.s3.amazonaws.com/backgrounds/heart-wallpaper-1920x10802.jpg");
  text-align: left;

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
#pricing {
margin-top: 70px;
}
footer {
margin-top:20px;
}
#pricing h3 {
	color: #333;
}
#pricing p {
	color:#555;
}
#pricing li {
	color:#666;
}
.howtopay {
    background: #ffffff;
    border: 1px solid #dedede;
    padding: 30px;
    margin-top: 30px;
	border-radius:3px;
}
.howtopay h3 {
	margin-top:0px;
}
.addons-box {
	background:none repeat scroll 0px 0px rgba(0, 0, 0, 0.7);
}
.addons h3 {
	color:#ffffff;
	margin-top:20px;
}
</style>



	<section id="pricing">
		<div class="container">
			<div class="row">
					<div class="col-md-4">
							<div class="panel panel-danger">
									<div class="panel-heading">
											<h3 class="text-center">PACKAGE 1</h3>
											<p class="text-center">Online Serenade via Skype/Facebook</p>
									</div>
									<div class="panel-body text-center">
											<p class="lead" style="font-size:30px"><strong>$32 or PHP1500</strong></p>
									</div>
									<ul class="list-group list-group-flush text-center">
											<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> 3 songs of your choice
											</li>
											<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> 1 to 2 musicians
											</li>
											
											<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> Message to recipient
											</li>
									</ul>
									<!-- Modal -->
									<div id="modal-package1" class="modalDialog" style="text-align:center;">
										<div>	<a href="#close" title="Close" class="close">X</a>
											<br>
											<?php
												$package1 = str_replace("fblogin","fblogin/booking/package/1",$login_url);
											?>
											<p><a href="<?php echo $package1?>" class="btn btn-primary">Connect with <i class="fa fa-facebook-square"></i></a></p>
										</div>
									</div>
									<!-- /Modal -->	
									<div class="panel-footer"> <a class="btn btn-lg btn-block btn-danger" href="<?=($this->session->userdata('logged_in')===false)?"#modal-package1":"/booking/package/1"?>">Get Package 1</a> </div>
							</div>
					</div>
					<div class="col-md-4">
							<div class="panel panel-info">
									<div class="panel-heading">
											<h3 class="text-center">PACKAGE 2</h3>
											<p class="text-center">Online Serenade Video Gram</p>
									</div>
									<div class="panel-body text-center">
											<p class="lead" style="font-size:30px"><strong>$32 or PHP1500</strong></p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> 3 songs of your choice
											</li>
											<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> 1 to 2 musicians
											</li>
											
											<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> Message to recipient
											</li>
									</ul>
									<!-- Modal -->
									<div id="modal-package2" class="modalDialog" style="text-align:center;">
										<div>	<a href="#close" title="Close" class="close">X</a>
											<br>
											<?php
												$package2 = str_replace("fblogin","fblogin/booking/package/2",$login_url);
											?>
											<p><a href="<?php echo $package2?>" class="btn btn-primary">Connect with <i class="fa fa-facebook-square"></i></a></p>
										</div>
									</div>
									<!-- /Modal -->	
									<div class="panel-footer"> <a class="btn btn-lg btn-block btn-danger" href="<?=($this->session->userdata('logged_in')===false)?"#modal-package2":"/booking/package/2"?>">Get Package 2</a> </div>
							</div>
					</div>
					<div class="col-md-4">
							<div class="panel panel-success">
									<div class="panel-heading">
											<h3 class="text-center">PACKAGE 3</h3>
											<p class="text-center">Live Serenade</p>
									</div>
									<div class="panel-body text-center">
											<p class="lead" style="font-size:30px"><strong>$64 OR PHP3000</strong></p>
									</div>
									<ul class="list-group list-group-flush text-center">
											<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> 3 Songs
											</li>
											<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> 1 to 2 musicians
											</li>
											<li class="list-group-item">
													<span class="glyphicon glyphicon-heart"></span> Message to recipient
											</li>
									</ul>
									<!-- Modal -->
									<div id="modal-package3" class="modalDialog" style="text-align:center;">
										<div>	<a href="#close" title="Close" class="close">X</a>
											<br>
											<?php
												$package3 = str_replace("fblogin","fblogin/booking/package/3",$login_url);
											?>
											<p><a href="<?php echo $package3?>" class="btn btn-primary">Connect with <i class="fa fa-facebook-square"></i></a></p>
										</div>
									</div>
									<!-- /Modal -->	
									<div class="panel-footer"> <a class="btn btn-lg btn-block btn-danger" href="<?=($this->session->userdata('logged_in')===false)?"#modal-package3":"/booking/package/3"?>">Get Package 3</a> </div>
							</div>
					</div>
					
			</div>
	</div>
	
	<div class="container">
			<div class="row">
					<div class="col-md-12">
						<div class="howtopay">
						<h3>How to pay?</h3>
						<P>						We will be confirming your booking once you submit this form via email or sms. We have three options for you to deposit your payment.</p>


<h4 style="color:#000 !important;">Paypal : bizmaida@gmail.com</h4>

<h4 style="color:#000 !important;">Bank Deposit : </h4>
<p>Bank: Banco de Oro - Legazpi Streeet Davao City, Philippines<br />
Bank Account: jonathan roy/maida barrientos
Account No.: C/A -194 007669 0
Swift code: BNORPHMM (for payment fr abroad)</p>

<p>E-mail deposit slip to social@lovechannel.com</p>

<h4 style="color:#000 !important;">Coins.ph </h4>
<p>Wallet : 36TCv5TrNtUYGJdzZhAZdkiaqAojErPJcY</p>

						</div>


					</div>
			</div>
	</div>	
	
	</section>	

	<section style="padding: 40px 0px;">
	<div class="container">
			<div class="row">
					<div class="col-md-12">
						<div class="addons">
						<h3><i class="fa fa-puzzle-piece"></i> Add-ons</h3>
						</div>
					</div>
									<div class="col-md-3">
										<img class="img-responsive" src="https://s3.amazonaws.com/assets.zipsite.net/uploads/band.png">
									</div>
									<div class="col-md-3">
										<img class="img-responsive" src="https://s3.amazonaws.com/assets.zipsite.net/uploads/lights.png">
									</div>
									<div class="col-md-3">
										<img class="img-responsive" src="https://s3.amazonaws.com/assets.zipsite.net/uploads/video.png">
									</div>
									<div class="col-md-3">
										<img class="img-responsive" src="https://s3.amazonaws.com/assets.zipsite.net/uploads/cake.png">
									</div>
									<div class="col-md-3" style="margin-top: 30px;">
										<img class="img-responsive" src="https://s3.amazonaws.com/assets.zipsite.net/uploads/flowers.png">
									</div>
									<div class="col-md-3" style="margin-top: 30px;">
										<img class="img-responsive" src="https://s3.amazonaws.com/assets.zipsite.net/uploads/chocolates.png">
									</div>
									<div class="col-md-3" style="margin-top: 30px;">
										<img class="img-responsive" src="https://s3.amazonaws.com/assets.zipsite.net/uploads/stufftoy.png">
									</div>
			</div>
	</div>
	</section>
	
 
  <?php $this->load->view('shared/footer'); ?>