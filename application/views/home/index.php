<?php $this->load->view('shared/header'); ?>
<style>
#services {
	background:#fff;	
}
#services h2, #services h3 {
	color:#333;
}
#cities {
	background:#ccc;	
}
#cities h2, #cities h3 {
	color:#333;
}

</style>
    <header>
		<div class="container">
            <div class="row">
				<div class="col-lg-6"></div>
				<div class="col-lg-6">
					<div class="headercontent">
						<h1>Express Your Feelings to the One You Love</h1>
						<hr>
						<p>Let LoveChannel serenade your love ones on any occasion, birthdays, anniversary, engagement or turn any ordinary day extraordinary.</p>
						<a href="<?=($this->session->userdata('logged_in')===false)?"#modal-one":"/booking/"?>" class="btn btn-primary btn-xl btn-lg page-scroll">Get Started</a>
						<div class="express-lists">
							<p><i class="fa fa-heart"></i> Express your love through serenade.</p>
							<p><i class="fa fa-heart"></i> Tell them how important they are.</p>
							<p><i class="fa fa-heart"></i> Show someone how you feel.</p>
						</div>
					</div>
				</div>				
			</div>
		</div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Book and Express your love today</h2>
                    <hr class="light">
                    <p class="text-faded">When you're in a relationship with someone who has truly captured your heart, you might be bursting at the seams with wanting to tell them how you feel. If you have a crush on someone, it may be a little bit more complicated than that. Communicating your feelings for someone can be tricky at first, but there are many other ways of expressing yourself other than blurting out, "I love you."</p>
                    <a href="<?=($this->session->userdata('logged_in')===false)?"#modal-one":"/booking/"?>" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Serenade them via these options</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary"></i>
                        <h3>Messenger Gram</h3>
                        <p class="text-muted">Serenade your love ones wherever they are via Facebook video or Skype!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Video Gram</h3>
                        <p class="text-muted">Let our roster of musicians rock their world with an edited video gram specially for your love ones.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Live Serenade</h3>
                        <p class="text-muted">Surprise your love ones with a live performance from our artists at your local venue.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Great Add-ons</h3>
                        <p class="text-muted">Feel the need to splurge with add-ons like full band, lights and sounds, video coverage, cake, flowers or chocolates!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="cities">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Live Serenade is only available in these cities</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
		  <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-location-arrow wow bounceIn text-primary"></i>
                        <h3>Davao, Philippines</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-location-arrow wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Miami, Florida</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-location-arrow wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>New York</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-location-arrow wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Hawaii</h3>
                    </div>
                </div>
            </div>
        </div>
</section>		
		
	
	
        <?php $this->load->view('shared/footer'); ?>