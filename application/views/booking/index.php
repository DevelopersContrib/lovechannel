<!DOCTYPE html>
<html>
	<head>
		<title>Love Channel - Book Us to Serenade your Love Ones</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project with jQuery">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/form-style.css">
		<!-- Date Timepicker -->
		<link rel="stylesheet" href="/css/bootstrap-datetimepicker.css" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap-datetimepicker.js"></script>
		<script>
			$(document).ready(function(){
				$('.btn-step1').click(function(){
					flagevent_date = false;
					flagoccasion = false;
					flagservice_id = false;
					flagonline_serenade_type= false;
					//Event Date
					if(!$('input[name="event_date"]').val()==""){
						$('.event_date-msg').removeClass("help-block");
						$('.event_date-msg').text('');
						$('input[name="event_date"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagevent_date = true;
					}else{
						$('.event_date-msg').addClass("help-block");
						$('.event_date-msg').text('Please enter your event date.');
						$('input[name="event_date"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//ocassion
					if(!$('input[name="occasion"]').val()==""){
						$('.occasion-msg').removeClass("help-block");
						$('.occasion-msg').text('');
						$('input[name="occasion"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagoccasion = true;
					}else{
						$('.occasion-msg').addClass("help-block");
						$('.occasion-msg').text('Please enter your occasion.');
						$('input[name="occasion"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Serenade Type
					if(!$('select[name="service_id"]').val()==""){
						$('.service_id-msg').removeClass("help-block");
						$('.service_id-msg').text('');
						$('select[name="service_id"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagservice_id = true;
					}else{
						$('.service_id-msg').addClass("help-block");
						$('.service_id-msg').text('Please select your serenade type.');
						$('select[name="service_id"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Serenade Type
					if(!$('select[name="online_serenade_type"]').val()==""){
						$('.online_serenade_type-msg').removeClass("help-block");
						$('.online_serenade_type-msg').text('');
						$('select[name="online_serenade_type"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagonline_serenade_type = true;
					}else{
						$('.online_serenade_type-msg').addClass("help-block");
						$('.online_serenade_type-msg').text('Please select your serenade type.');
						$('select[name="online_serenade_type"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					
					if($('select[name="service_id"]').val()==2){
						flagonline_serenade_type = true;
					}
					
					if(flagevent_date==true&&flagoccasion==true&&flagservice_id==true&&flagonline_serenade_type == true){
						$('.step1').hide();
						$('.step2').show();
					}
					return false;
				});

				$('.btn-step2').click(function(){
					flagreceiver_name = false;
					flagreceiver_email = false;
					flagreceiver_messenger = false;
					flagreceiver_messenger_username = false;
					//Receiver's Name
					if(!$('input[name="receiver_name"]').val()==""){
						$('.receiver_name-msg').removeClass("help-block");
						$('.receiver_name-msg').text('');
						$('input[name="receiver_name"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagreceiver_name = true;
					}else{
						$('.receiver_name-msg').addClass("help-block");
						$('.receiver_name-msg').text("Please enter receiver's name.");
						$('input[name="receiver_name"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Receiver's EMail
					if(!$('input[name="receiver_email"]').val()==""){
						$('.receiver_email-msg').removeClass("help-block");
						$('.receiver_email-msg').text('');
						$('input[name="receiver_email"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagreceiver_email = true;
					}else{
						$('.receiver_email-msg').addClass("help-block");
						$('.receiver_email-msg').text("Please enter receiver's email.");
						$('input[name="receiver_email"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Receiver's Messenger
					if(!$('select[name="receiver_messenger"]').val()==""){
						$('.receiver_messenger-msg').removeClass("help-block");
						$('.receiver_messenger-msg').text('');
						$('select[name="receiver_messenger"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagreceiver_messenger = true;
					}else{
						$('.receiver_messenger-msg').addClass("help-block");
						$('.receiver_messenger-msg').text("Please enter receiver's messenger.");
						$('select[name="receiver_messenger"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Receiver's messenger username
					if(!$('input[name="receiver_messenger_username"]').val()==""){
						$('.receiver_messenger_username-msg').removeClass("help-block");
						$('.receiver_messenger_username-msg').text('');
						$('input[name="receiver_messenger_username"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagreceiver_messenger_username = true;
					}else{
						$('.receiver_messenger_username-msg').addClass("help-block");
						$('.receiver_messenger_username-msg').text("Please enter receiver's messenger username.");
						$('input[name="receiver_messenger_username"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					
					if($('select[name="service_id"]').val()==2 || $('#online_serenade_type').val()=="videogram"){
						flagreceiver_messenger_username = true;
					}
					
					
					if(flagreceiver_name==true&&flagreceiver_email==true&&flagreceiver_messenger==true&&flagreceiver_messenger_username==true){
						$('.step2').hide();
						$('.step3').show();
					}
					return false;
				});

				$('.btn-step3').click(function(){
					flagcountry_name = false;
					flagaddress = false;
					flagcustomer_email = false;
					customer_name = false;
					flagcustomer_phone = false;
					//Country
					if(!$('input[name="country_name"]').val()==""){
						$('.country_name-msg').removeClass("help-block");
						$('.country_name-msg').text('');
						$('input[name="country_name"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagcountry_name = true;
					}else{
						$('.country_name-msg').addClass("help-block");
						$('.country_name-msg').text('Please enter your country.');
						$('input[name="country_name"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Address
					if(!$('input[name="address"]').val()==""){
						$('.address-msg').removeClass("help-block");
						$('.address-msg').text('');
						$('input[name="address"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagaddress = true;
					}else{
						$('.address-msg').addClass("help-block");
						$('.address-msg').text('Please enter your complete address.');
						$('input[name="address"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Customer Email
					if(!$('input[name="customer_email"]').val()==""){
						$('.customer_email-msg').removeClass("help-block");
						$('.customer_email-msg').text('');
						$('input[name="customer_email"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagcustomer_email = true;
					}else{
						$('.customer_email-msg').addClass("help-block");
						$('.customer_email-msg').text('Please enter your phone.');
						$('input[name="customer_email"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Customer Name
					if(!$('input[name="customer_name"]').val()==""){
						$('.customer_name-msg').removeClass("help-block");
						$('.customer_name-msg').text('');
						$('input[name="customer_name"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagcustomer_name = true;
					}else{
						$('.customer_name-msg').addClass("help-block");
						$('.customer_name-msg').text('Please enter your name.');
						$('input[name="customer_name"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Customer Phone
					if(!$('input[name="customer_phone"]').val()==""){
						$('.customer_phone-msg').removeClass("help-block");
						$('.customer_phone-msg').text('');
						$('input[name="customer_phone"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagcustomer_phone = true;
					}else{
						$('.customer_phone-msg').addClass("help-block");
						$('.customer_phone-msg').text('Please enter accomplice address.');
						$('input[name="customer_phone"]').parents('.form-group').removeClass("success").addClass("has-error");
					}

					if(flagcountry_name==true&&flagaddress==true&&flagcustomer_email==true&&flagcustomer_name==true&&flagcustomer_phone==true){
						$('.step3').hide();
						$('.step4').show();
					}

					return false;
				});

				$('.btn-step4').click(function(){
					flagaccomplice_name = false;
					flagaccomplice_phone = false;
					flagaccompliceAddress = false;
					//Accomplice_name
					if(!$('input[name="accomplice_name"]').val()==""){
						$('.accomplice_name-msg').removeClass("help-block");
						$('.accomplice_name-msg').text('');
						$('input[name="accomplice_name"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagaccomplice_name = true;
					}else{
						$('.accomplice_name-msg').addClass("help-block");
						$('.accomplice_name-msg').text('Please enter accomplice name.');
						$('input[name="accomplice_name"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Accomplice Phone
					if(!$('input[name="accomplice_phone"]').val()==""){
						$('.accomplice_phone-msg').removeClass("help-block");
						$('.accomplice_phone-msg').text('');
						$('input[name="accomplice_phone"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagaccomplice_phone = true;
					}else{
						$('.accomplice_phone-msg').addClass("help-block");
						$('.accomplice_phone-msg').text('Please enter accomplice phone.');
						$('input[name="accomplice_phone"]').parents('.form-group').removeClass("success").addClass("has-error");
					}

					if(flagaccomplice_name==true&&flagaccomplice_phone==true){
						$('.step4').hide();
						$('.step5').show();
					}
					return false;
				});

				$('.btn-step5').click(function(){
					flagsongs = false;
					flagsMessage = false;
					//Songs
					if(!$('textarea[name="songs"]').val()==""){
						$('.songs-msg').removeClass("help-block");
						$('.songs-msg').text('');
						$('textarea[name="songs"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagsongs = true;
					}else{
						$('.songs-msg').addClass("help-block");
						$('.songs-msg').text("Please enter list of songs.");
						$('textarea[name="songs"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					//Special Message
					if(!$('textarea[name="sMessage"]').val()==""){
						$('.sMessage-msg').removeClass("help-block");
						$('.sMessage-msg').text('');
						$('textarea[name="sMessage"]').parents('.form-group').removeClass("has-error").addClass("success");
						flagsMessage = true;
					}else{
						$('.sMessage-msg').addClass("help-block");
						$('.sMessage-msg').text("Please enter a special message.");
						$('textarea[name="sMessage"]').parents('.form-group').removeClass("success").addClass("has-error");
					}
					if(flagsongs==true&& flagsMessage==true){
						alert('done!');
					}
					return false;
				});
				
				$('.btn-step2-back').click(function(){
					$('.step2').hide();
					$('.step1').show();
					return false;
				});
				
				$('.btn-step3-back').click(function(){
					$('.step3').hide();
					$('.step2').show();
					return false;
				});
				
				$('.btn-step4-back').click(function(){
					$('.step4').hide();
					$('.step3').show();
					return false;
				});
				
				$('.btn-step5-back').click(function(){
					$('.step5').hide();
					$('.step4').show();
					return false;
				});


				$('#service_id').change(function(){
					var val = $(this).val();
					if (val == '1'){
						$('#for-online').show();
					}else {
						$('#for-online').hide();
					}
				});

				
				$('#online_serenade_type').change(function(){
					var val = $(this).val();
					if (val == 'messenger'){
						$('#for_messenger_1').show();
						$('#for_messenger_2').show();
					}else {
						$('#for_messenger_1').hide();
						$('#for_messenger_2').hide();
					}
				});
				

				$('#eventdate').datetimepicker();
				$('#eventTime').datetimepicker();

				$('#btn-book-now').click(function(){
					var cdata = jQuery('#bookForm').serialize();
					
					var $btn = $(this).button('loading');
        
					$.ajax({
				        url: '/booking/save',
				        type: 'POST',
				        dataType:"JSON",
				        data: cdata,
				        success: function(response){
							$btn.button('reset');
				        	if (response.status){
								$('#totals').html(response.total);
								$('#sscustomer_name').html($('#customer_name').val());
								$('#scustomer_name').html($('#customer_name').val());
								$('#sevent_date').html($('#event_date').val());
								$('#steps').remove();
								$('.text-success-message').show();
								//$('.wrap-form-content-container').html('<div class="col-md-6 col-md-offset-3"><div class="alert alert-success">You successfully booked a serenade for your event.<button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');
				   			}else {
								$(".wrap-form-content-container").html('<div class="col-md-6 col-md-offset-3"><div class="alert alert-danger">Error<button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');
							}
							
			           },
				        error: function(){
				        	$(".wrap-form-content-container").html('<div class="alert alert-danger">An error occurred<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				        }
				    });
				});
			});
		</script>
		<style>
			.text-success-message{
				font-size: 18px;
				line-height: 26px;
			}
			.text-success-message p{
				margin-bottom: 15px;
			}
		</style>
	</head>
	<body>
		<div class="wrap-form-header-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="/">
							<img src="https://s3.amazonaws.com/assets.zipsite.net/images/2013/logo-LoveChannel-1-2.png" class="logo" />
						</a>
						<h1 class="text-capitalize ttle">
							 <span class="fnt-600">Book a LoveChannel Serenade Package Today </span>
						</h1>
						<p class="">
							Fikl our this form and Let us Serenade Your Love Ones
						</p>
					</div>
				</div>
			</div>
		</div>
		<form action="javascript:void(0)" method="post" name="bookForm" id="bookForm">
		 <div class="wrap-form-content-container">
			<div class="container">
				<div class="row">
					<div id="steps">
					<div class="col-md-6 col-md-offset-3 step1 ">
						<div class="form-group">
							<div class='input-group date input-group-lg' id='eventdate'>
								<input type='text' class="form-control" placeholder="Event Date *" name="event_date" id="event_date"/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
							<small class="event_date-msg"></small>
						</div>
					
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Occasion *" name="occasion" />
							<small class="occasion-msg"></small>
						</div>
						<div class="form-group">
							<select class="form-control input-lg text-capitalize" name="service_id" id="service_id">
								<option value="">Serenade Type *</option>
								<option value="1">Online Serenade</option>
								<option value="2">Live Serenade</option>
							</select>
							<small class="service_id-msg"></small>
						</div>
						<div class="form-group" id="for-online" style="display:none">
							<select class="form-control input-lg text-capitalize" name="online_serenade_type" id="online_serenade_type">
								<option value="">Serenade Type</option>
								<option value="messenger">Messenger via FB or Skype`</option>
								<option value="videogram">Videogram (pre-edited Video)</option>
							</select>
							<small class="online_serenade_type-msg"></small>
						</div>
						<div class="form-group">
							<a href="" class="btn btn-lg btn-primary btn-block btn-step1">NEXT</a>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-3 step2 ">
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Recipient Name *" name="receiver_name" id="receiver_name" />
							<small class="receiver_name-msg"></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Recipient Email *" name="receiver_email" id="receiver_email" />
							<small class="receiver_email-msg"></small>
						</div>
						<div class="form-group" id="for_messenger_1" style="display:none">
							<select class="form-control input-lg text-capitalize" name="receiver_messenger" id="receiver_messenger">
								<option value="skype">Skype Messenger</option>
								<option value="facebook">Facebook Messenger</option>
							</select>
							<small class="receiver_messenger-msg"></small>
						</div>
						<div class="form-group" id="for_messenger_2" style="display:none">
							<input type="text" class="form-control input-lg" placeholder="Recipient Messenger Username *" name="receiver_messenger_username" id="receiver_messenger_username" />
							<small class="receiver_messenger_username-msg"></small>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<a href="" class="btn btn-lg btn-danger btn-block btn-step2-back">BACK</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<a href="" class="btn btn-lg btn-primary btn-block btn-step2">NEXT</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-3 step3 ">
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Recipient Country *" name="country_name" />
							<small class="country_name-msg"></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Recipient Complete Address *" name="address" />
							<small class="address-msg"></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Your Email *" name="customer_email" />
							<small class="customer_email-msg"></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Your Name *" name="customer_name" id="customer_name" />
							<small class="customer_name-msg"></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Your Phone *" name="customer_phone" />
							<small class="customer_phone-msg"></small>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<a href="" class="btn btn-lg btn-danger btn-block btn-step3-back">BACK</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<a href="" class="btn btn-lg btn-primary btn-block btn-step3">NEXT</a>
								</div>
							</div>
						</div>
					</div>
          			<div class="col-md-6 col-md-offset-3 step4 ">
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Accomplice Name *" name="accomplice_name" />
							<small class="accomplice_name-msg"></small>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Phone *" name="accomplice_phone" />
							<small class="accomplice_phone-msg"></small>
						</div>
						
						<div class="form-group">
							<div class="wrap-check-box-container">
							   <?php  if ($aons->num_rows() > 0):?>
							     <?php  foreach ($aons->result() as $row):?>
										<label class="checkbox-inline">
											<input class="chk" type="checkbox" value="<?php echo $row->add_on_id?>" name="add_ons[]"> <?php echo $row->item_name?> - P<?php echo number_format($row->price)?>
										</label>
								<?php endforeach;?>
							<?php endif?>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<a href="" class="btn btn-lg btn-danger btn-block btn-step4-back">BACK</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<a href="" class="btn btn-lg btn-primary btn-block btn-step4">NEXT</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-3 step5 ">
						<div class="form-group">
							<textarea rows="5" class="form-control input-lg" placeholder="Songs *" name="songs"></textarea>
							<small class="songs-msg"></small>
						</div>
						<div class="form-group">
							<textarea rows="5" class="form-control input-lg" placeholder="Special Message *" name="special_message"></textarea>
							<small class="sMessage-msg"></small>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<a href="" class="btn btn-lg btn-danger btn-block btn-step5-back">BACK</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<a href="javascript:void(0)" id="btn-book-now" data-loading-text="Saving..." class="btn btn-lg btn-success btn-block btn-step5">SUBMIT</a>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-6 col-md-offset-3 text-center">
						<p>
							Your email will not be published on your profile page. We promise not to share your email with anyone else. Please check our
							<a href="javascript:;" class="step-terms" data-toggle="modal" data-target="#termsCond"> Terms &amp; Conditions. </a>
						</p>
				    </div>
					</div>
					
				    <div class="col-md-6 col-md-offset-3 text-success-message" style="display:none">
				    	<h2 class="text-capitalize fnt-700">Hello <span id="sscustomer_name">,</h2>

				    	<p>
				    		You have successfully placed a booking with Lovechannels.com on <span id="sevent_date"></span> for <span id="scustomer_name"></span>.
				    	</p>

				    	<p>
				    		Please pay a total of PHP<span id="totals"></span> within 10 hours.
				    	</p>
				    	<br>
				    	<div class="alert alert-info">
				    		<strong>HOW TO PAY :</strong>
				    		<p>
				    			We will confirm your booking once you submit this form via email or sms. We have three options for you to deposit your payment.
				    		</p>
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
		</div>
		</form>
		<!-- Modal -->
		<div class="modal fade" id="termsCond" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
					</div>
					<div class="modal-body">
						<ul>
							<li>
								Payment must be made at least 3 days before the booking.
							</li>
							<li>
								Postponement or cancellation of a booking  must be done at least 24 hours prior to original schedule; if not, a rescheduling fee of USD15 will be charged and payment must be done 2 days before the new Booking schedule.
							</li>
							<li>
								Prices above cover LoveChannel service/s only; any additional expenses to implement the LoveChannel; e.g. entrance fee to the venue, etc. must be shouldered by client.
							</li>
							<li>
								PRICES MAY CHANGE WITHOUT PRIOR NOTICE
							</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>