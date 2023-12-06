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
	<title>Professional Free Hosting</title>
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
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Professional & Reliable<br/> Free Hosting</h1>
					<h3>Get your free hosting account within few minutes!</h3>
					<a href="signup.php" class="btn">Sign up now!</a>
				</div>
			</div>
		</div>
	</div>
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="services-title">
						<h2>Welcome to our free hosting!</h2>
						<p>We are specialists in free hosting services using clustered technology powered by one of the largest hosting organizations on the internet. Sign up here for fast free PHP & MySQL hosting including a free sub domain. A powerful control panel provided to manage your website, packed with hundreds of great features including website building tools, Email, FTP add-on domain and much more.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="services-features">
					<div class="services-features-col col-md-4">
						<a href="free-hosting.php"><img src="img/srv1.jpg" alt=""></a>
						<h3>Free hosting</h3>
						<p>We provide quality free hosting powered by one of the largest hosting organizations on the internet!</p>
					</div>
					<div class="services-features-col col-md-4">
						<a href="premium-hosting.php"><img src="img/srv2.jpg" alt=""></a>
						<h3>Premium hosting</h3>
						<p>Powerful premium cPanel hosting powered by iFastNet with multiple plans to match your needs!</p>
					</div>
					<div class="services-features-col col-md-4">
						<a href="domains.php"><img src="img/srv3.jpg" alt=""></a>
						<h3>Domain names</h3>
						<p>Register your own premium domain name within few minutes, we support many extensions (.com, .net, .org...).</p>
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