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
		<link rel="stylesheet" href="css/dataTables.css">
		<link rel="stylesheet" href="css/admin.css">

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
		<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script src="js/datatables.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				function setHeight() {
					windowHeight = $(window).innerHeight();
					$('#page-wrapper').css('min-height', windowHeight);
				};
				setHeight();

				$(window).resize(function() {
					setHeight();
				});

				$('.datatable').each(function(){
					var datatable = $(this);
					// SEARCH - Add the placeholder for Search and Turn this into in-line form control
					var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
					search_input.attr('placeholder', 'Search');
					search_input.addClass('form-control input-sm');
					// LENGTH - Inline-Form control
					var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
					length_sel.addClass('form-control input-sm');
			        datatable.bind('page', function(e){
			            window.console && console.log('pagination event:', e) //this event must be fired whenever you paginate
			        });
				});
				
			});
		</script>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-custom-admin navbar-static-top">
			<div class="">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand navbar-brand-cust" href="#">
						<img class="logo" src="https://s3.amazonaws.com/assets.zipsite.net/images/2013/logo-LoveChannel-mono-1.png" alt="" />
					</a>
				</div>
				<ul class="nav navbar-right navbar-top-links ">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Welcome <span class="text-capitalize"><?php echo $this->session->userdata('username')?></span>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu text-capitalize">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="/admin/logout">Logout</a></li>
						</ul>
					</li>
				</ul>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-default sidebar" role="navigation">
					<div id="admin-navbar-collapse" class="collapse sidebar-nav navbar-collapse" aria-expanded="false" style="height: 1px;">
						<ul id="side-menu" class="nav">
							<li>
								<a href="/admin" <?php if ($active=='bookings'):?>class="active" <?php endif?>>
									<i class="fa fa-book"></i>
									Bookings
								</a>
							</li>
							<li>
								<a href="/admin/musician" <?php if ($active=='musician'):?>class="active" <?php endif?>>
									<i class="fa fa-music"></i>
									Musicians
								</a>
							</li>
						</ul>
					</div>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>