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
header {
	background:#232323;
}
</style>

	<section class="bg-white" id="about">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-8 text-center center-col">
                        <p class="title-large text-uppercase letter-spacing-1 black-text font-weight-600" text-center>Lovechannel.com Terms</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-8 col-xs-11 center-col xs-no-padding">
                    <div class="arrw-rela"><div class="arrw-point-white"></div></div>
                    <div class="box-blck">
                        <h2 class="ttle text-capitalize">
                            loveChannel.com Terms of Use
                        </h2>
                        <p class="text-justify">
                            By using the lovechannel.com site you are agreeing to comply with these terms of use. loveChannel.com also has a privacy policy outlined here: Privacy and by using and accessing the loveChannler.com site you are signifying your acknowledgement and agreement to lovechannel.com's privacy policy.
                        </p>
                        <br>
                        <h2 class="ttle text-capitalize">
                            Disclaimer and No Warranty
                        </h2>
                        <p class="text-justify">
                            lovechannel.com does not make any guarantees or warranties as to the accuracy of the content and profiles or messages.
                            lovechannel.com is not liable for any inaccuracies on the site content and you are using the site at your own risk.
                            lovechannel.com is for informational purposes only and provided "as is" without any warranties or guarantees.
                            By using this site you are agreeing to hold lovechannel.com harmless from any harm, loss, damage or injury resulting or
                            arising from your usage of the lovechannel.com site.
                        </p>
                        <br>
                        <h2 class="ttle text-capitalize">
                            Modifications to this Terms of Use
                        </h2>
                        <p class="text-justify">
                            lovechannel.com reserves the right at it's sole discretion to change, amend or update this terms of use.
                            It is your responsibility to review the Terms of Use for any updates.
                            And by using this site signifies consent to the right of lovechannel.com to change such Terms of Use.
                        </p>
                        <p class="text-justify">
                            lovechannel.com and its contributors are not liable for incidental, special, punitive, consequential or exemplary damages of any kind,
                            including, without limitation, loss of business, lost revenues or profits, or loss of data in any way related to the loveChannel.com site or for any loss or injury or claim based on interruptions, errors, omissions, or other inaccuracies on the loveChannel.com site.
                            You agree to indemnify, defend, and hold harmless loveChannel.com and any of its content contributors from and against any and all liability and
                            costs, including, without limitation, regulatory penalties, attorney's fees, and costs incurred in connection with any claim arising our of your
                            use of the site or any breach by you of these Terms of Use. loveChannel.com shall not be liable for any direct, indirect, incidental, special,
                            or consequential damages arising out of the use or inability to use the site. loveChannel.com does not warrant that the site will be uninterrupted,
                            error free, or virus free; nor does loveChannel.com make any warranty as to the results to be obtained from use of the site or its Content.
                            In some states jurisdictions limitations of liability are not permitted. In such jurisdictions, some of the foregoing limitations may not apply
                            to you. These limitations shall apply to the fullest extent permitted by law.
                        </p>
                        <br>
                        <h2 class="ttle text-capitalize">
                            Comments Sections and Content
                        </h2>
                        <p class="text-justify">
                            By submitting Content to us or by posting comments or information on your profile, you are granting or warrant that the owner has express granted, to loveChannel.com us a perpetual, irrevocable, royalty-free, and transferable right and license to use and distribute and create derivative works. We may exercise this grant in any platform, media or technology for the full term of any copyright that may exist in such content. You are also hereby granting other affiliates of loveChannel.com the rights to use such content in a similar fashion.
                        </p>
                        <br>
                        <h2 class="ttle text-capitalize">
                            Content on other sites
                        </h2>
                        <p class="text-justify">
                            loveChannel.com has not reviewed and are not responsible for the content and actions of any of the sites that loveChannel.com links to nor do we make any warranties to the accuracy and/or safety of using such sites or vendors or products and services. loveChannel.com has no control over the content or actions of such sites and/or vendors is not responsible nor does it represent or imply that it endorses such website or vendor. You're solely responsible for protecting yourself and technology devices and computers from viruses, worms, Trojan horses, and other harmful or destructive content or privacy violating, or otherwise malicious encounters resulting from such sites as well as any transactions or interaction of any kind. loveChannel.com disclaims any responsibility for any harm resulting from your use of non loveChannel.com sites and pages.
                        </p>
                        <br>
                        <p class="text-justify">
                            As a user of this Web Site you are granted a nonexclusive, nontransferable, revocable, limited license to access and use this Web Site and Content in accordance with these Terms of Use. Provider may terminate this license at any time for any reason. 
                        </p>
                        <br>
                        <p class="text-justify">
                            The Content on is for your personal use only and not for commercial exploitation. You may not decompile, reverse engineer, disassemble, rent, lease, loan, sell, sublicense, or create derivative works from this Web Site or the Content. Nor may you use any network monitoring or discovery software to determine the site architecture, or extract information about usage, individual identities or users. You may not use any robot, spider, other automatic software or device, or manual process to monitor or copy our Web Site or the Content without Provider's prior written permission. You may not use this Web Site to transmit any false, misleading, fraudulent or illegal communications. You may not copy, modify, reproduce, republish, distribute, display, or transmit for commercial, non-profit or public purposes all or any portion of this Web Site, except to the extent permitted above. You may not use or otherwise export or re-export this Web Site or any portion thereof, or the Content in violation of the export control laws and regulations of the United States of America. Any unauthorized use of this Web Site or its Content is prohibited.
                        </p>
                        <br>
                        <p class="text-justify">
                            Nothing submitted to loveChannel.com is treated as confidential. The accuracy, completeness, adequacy or currency of the Content is not warranted or guaranteed. Your use of Content on this Web Site or materials linked from this Web Site is at your own risk. 
                        </p>
                        <br>
                        <p class="text-justify">
                        loveChannel.com may contain advertising and sponsorship. Advertisers and sponsors are responsible for ensuring that material submitted for inclusion on this Web Site is accurate and complies with applicable laws. loveChannel.com is not be responsible for the illegality of or any error or inaccuracy in advertisersâ€™ or sponsorsâ€™ materials or for the acts or omissions of advertisers and sponsors. 
                        </p>
                        <br>
                        <h2 class="ttle text-capitalize">
                            Disclaimer
                        </h2>
                        <p class="text-justify">
                            The loveChannel.com site AND THE CONTENT ARE PROVIDED ON AN "AS IS" and "AS AVAILABLE"  BASIS. PROVIDER EXPRESSLY DISCLAIMS ALL WARRANTIES, INCLUDING THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. PROVIDER DISCLAIMS ALL RESPONSIBILITY FOR ANY LOSS, INJURY, CLAIM, LIABILITY, OR DAMAGE OF ANY KIND RESULTING FROM, ARISING OUT OF OR ANY WAY RELATED TO (A) ANY ERRORS IN OR OMISSIONS FROM THIS WEB SITE AND THE CONTENT, INCLUDING, BUT NOT LIMITED TO, TECHNICAL INACCURACIES AND TYPOGRAPHICAL ERRORS, (B) ANY THIRD PARTY CONTENT INCLUDING BUT NOT LIMITED TO ANY ERRORS IN OR OMISSIONS THEREFROM, (C) THE UNAVAILABILITY OF THIS WEB SITE OR ANY PORTION THEREOF, (D) YOUR USE OF THIS WEB SITE OR THE CONTENT, OR (E) YOUR USE OF ANY EQUIPMENT OR SOFTWARE IN CONNECTION WITH THIS WEB SITE.
                        </p>
                        <br>
                        <h2 class="ttle text-capitalize">
                            LIMITATION OF LIABILITY.
                        </h2>
                        <p class="text-justify">
                            loveChannel.com SHALL NOT BE LIABLE FOR ANY LOSS, INJURY, CLAIM, LIABILITY, OR DAMAGE OF ANY KIND RESULTING FROM YOUR USE OF THIS WEB SITE OR ITS CONTENT. PROVIDER SHALL NOT BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, INCIDENTAL, PUNITIVE OR CONSEQUENTIAL DAMAGES OF ANY KIND WHATSOEVER (INCLUDING, WITHOUT LIMITATION, ATTORNEYS' FEES) IN ANY WAY DUE TO, RESULTING FROM, OR ARISING IN CONNECTION WITH THE USE OF OR INABILITY TO USE THIS WEB SITE.  We do not endorse any of the profiles or businesses on loveChannel.com and use the site at your own risk.  We do not have any involvement with the parties or businesses who use this site nor their dealings or any interactions.
                        </p>
                        <p class="text-justify">
                            loveChannel.com has the right to delete any profile or content at it's sole discretion any time. . 
                        </p>
                        <p class="text-justify">
                            You agree to indemnify, defend and hold loveChannel.com and it's employees and/or contractors and any third party information providers to this Web Site harmless from and against all claims, losses, expenses, damages and costs, including reasonable attorneys' fees, resulting from any violation of these Terms of Use by you.
                        </p>
                        <p class="text-justify">
                            Minors are not allowed to use loveChannel.com and The provisions of paragraphs Disclaimer and Limitation of Liability, are for the benefit of loveChannel.com and its employees and/or contractors and any third party information providers to this Web Site. Each of these individuals or entities shall have the right to assert and enforce those provisions directly against you on its own behalf. 
                        </p>
                        <p class="text-justify">
                            loveChannel.com reserves the right to investigate complaints or reported violations of our Terms of Use and to take any action we deem appropriate including but not limited to reporting any suspected unlawful activity to law enforcement officials, regulators, or other third parties and disclosing any information necessary or appropriate to such persons or entities relating to user profiles, e-mail addresses, usage history, posted materials, IP addresses and traffic information.
                        </p>
                        <p class="text-justify">
                            loveChannel.com reserves the right to seek all remedies available at law and in equity for violations of these Terms of Use, including but not limited to the right to block access from a particular internet address to this Web Site and any other Provider web sites and their features.
                        </p>
                        <p class="text-justify">
                            The Terms of Use are governed by and construed in accordance with the laws of the State of Delaware and any action arising out of or relating to these terms shall be filed only in state or federal courts located in Delaware and you hereby consent and submit to the personal jurisdiction of such courts for the purpose of litigating any such action. 
                        </p>
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