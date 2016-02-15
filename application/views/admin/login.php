<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Let LoveChannel serenade your love ones on any occasion, birthdays, anniversary, engagement or turn any ordinary day extraordinary.">
		<meta name="author" content="Contrib">
		<title>Love Channel - Express your feelings through songs</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />
		

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-3531494-13', 'auto');
			ga('send', 'pageview');
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="/css/login-admin.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-4">
					<div class="wrap-loginlogo-container">
						<img alt="" src="https://s3.amazonaws.com/assets.zipsite.net/images/2013/logo-LoveChannel-mono-1.png" class="logo">
					</div>
					<div class="wrap-login-container">
						<h2 class="text-center ttle">Admin Login</h2>
						<div class="alert alert-danger" id="login-error" role="alert" style="display:none">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only">Error:</span>
						     <span id="login-error-message"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" name="txt-username" id="txt-username" placeholder="Username"  />
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-lg" name="txt-password" id="txt-password" placeholder="Password" />
						</div>
						<div class="form-group">
							<a href="javascript:processLogin();" class="btn btn-lg btn-primary btn-block">
								Login
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function(){
			$('#txt-username').keypress(function(e){
				if(e.keyCode==13){
					processLogin();
				}
			});
			
			$('#txt-password').keypress(function(e){
				if(e.keyCode==13){
					processLogin();
				}
			});
			
		});
		
		  function processLogin(){
			  var username = $('#txt-username').val();
			  var password = $('#txt-password').val();
			  $('#login-error').hide();
			  
			  if (username == ""){
				  $('#login-error-message').html('Please enter username');
				  $('#login-error').show();
             }else if (password == ""){
            	 $('#login-error-message').html('Please enter password');
				 $('#login-error').show();
             }else {
            	 $.post('/admin/logincheck',{
	         			username:username,
	         			password:password
         			},
         			function(data){
             			if (data.status){
         				 window.location = data.url;
             			}else {
             				  $('#login-error-message').html(data.message);
            				  $('#login-error').show();
             			}  
         		});
             }
			  
		  }
		</script>
	</body>
</html>