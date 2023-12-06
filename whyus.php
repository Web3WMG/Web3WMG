<?
// This is used to constuct the cPanel login ur>ol
include('geturl.php');
?>
<!DOCTYPE html>
<html>
<head>
<!-- Template designed by iFastNet (iFastNet.com) exclusively for MyOwnFreeHost.com users -->
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1 width=device-width">
	<title>Why Us?</title>
	<meta name="description" content="Professional Free Hosting">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- The Famous html Shiv or Shim -->
	<!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index.php" class="navbar-brand"><?echo $yourdomain;?></a>
						</div>
							<? include ('navigation.php'); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="intro-mini">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Why Us</h1>
					<h3>Why You Must Join Us?</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="latest">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="latest-title">
						<h2>The top 7 reasons</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-push-7">
					<img src="img/server.png" class="server img-responsive" alt="">
				</div>
				<div class="col-md-7 col-md-pull-5">
					<div class="latest-features">
						<ul>
							<li class="clearfix">
								<img src="img/whyus1.png" alt="">
								<h4>Instant activation</h4>
								<p>You will get your account up and running within 3 minutes right after you submit your account information.</p>
							</li>
							<li class="clearfix">
								<img src="img/whyus2.png" alt="">
								<h4>Cloud Hosting</h4>
								<p>Our free hosting plan is based on Cloud, which means, our servers are integrated to share all resources providing high resource availability.</p>
							</li >
							<li class="clearfix">
								<img src="img/whyus3.png" alt="">
								<h4>Security</h4>
								<p>100% secure hosting with 24/7 monitoring, firewal & hotlink protection.</p>
							</li>
							<li class="clearfix">
								<img src="img/whyus4.png" alt="">
								<h4>Complete Solution</h4>
								<p>We provide a complete free hosting solution, easy-to-use tools for building, managing and tracking powered by quality technical support!</p>
							</li>
							<li class="clearfix">
								<img src="img/whyus5.png" alt="">
								<h4>Professional</h4>
								<p>You'll have access to VistaPanel, a control panel packed with all the features you'll ever need! Website builder, SEO tools, Script installer...</p>
							</li >
							<li class="clearfix">
								<img src="img/whyus6.png" alt="">
								<h4>Low-cost upgrades</h4>
								<p>After you're website becomes popular, and when you're ready to upgrade, we got the best shared, vps & dedicated plans for the lower prices!</p>
							</li>
							<li class="clearfix">
								<img src="img/whyus7.png" alt="">
								<h4>Professional Support</h4>
								<p>You hate waiting hours and maybe days to get an answer? So do we! That's why we provide 24/7 fast response support service.</p>
							</li>							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="latest-col col-md-4">
					<h3>Our Services</h3>
					<ul>
						<li class="clearfix">
							<a href="free-hosting.php">Free Hosting</a>
						</li>
						<li class="clearfix">
							<a href="premium-hosting.php">Premium Hosting</a>
						</li>
						<li  class="clearfix">
							<a href="https://ifastnet.com/portal/vpshosting.php">VPS Hosting</a>
						</li>
						<li class="clearfix">
							<a href="https://ifastnet.com/portal/dedicatedserver.php">Dedicated Servers</a>
						</li>
						<li  class="clearfix">
							<a href="domains.php">Domain Name Registration</a>
						</li>
					</ul>
				</div>
				<div class="latest-col col-md-8">
					<h3>Why us</h3>
					<ul>
   					   <p>We use a powerful cluster of web servers that are all interconnected to act as one giant super computer. This technology is years ahead of most other hosting companies. Combining the power of many servers creates lightning fast website speed. Not only is the service extremely fast, it is resistant to failures that effect 'single server' hosting, used by most other free and paid hosting providers. If one of our clustered servers were to fail or have a problem, your website will continue to run normally using the working servers!</p>    
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<div class="copy">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a>Terms of service</a> | <a>Privacy policy</a> | © HostName, Powered By <a href="https://ifastnet.com">iFastNet</a>.
				</div>
			</div>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
</body>
<!-- Template designed by iFastNet (iFastNet.com) exclusively for MyOwnFreeHost.com users -->
</html>