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
	<title>Technical Support</title>
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
					<h1>Technical Support</h1>
					<h3>24/7 Availability</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="services-features">
					<div class="services-features-col col-md-4">
						<img src="img/sup1.jpg" alt="">
						<h3>Tickets</h3>
						<p>You can submit a support ticket from VistaPanel, we will answer it within the next 24 to 48 hours.</p>
					</div>
					<div class="services-features-col col-md-4">
						<img src="img/sup2.jpg" alt="">
						<h3>Emails</h3>
						<p>You can email us, but we use only the following email for technical support: <a>support@<?echo $yourdomain;?></a></p>
					</div>
					<div class="services-features-col col-md-4">
						<img src="img/sup3.jpg" alt="">
						<h3>Forums</h3>
						<p>You can also join our community forums if you want to interact with other users and get instant answers.</p>
					</div>
				</div>
			</div>
	<section class="questions">
    	<div>
        	<input id="ac-1" name="faq" type="checkbox" />
        	<label for="ac-1">How much files can I upload?</label>
        	<article class="content">
            <p>You're free to upload as much files as you want, but please be aware that the largest size for an individual file is limited to 10Mb.</p>
        	</article>
    	</div>
    	<div>
        	<input id="ac-2" name="faq" type="checkbox"/>
        	<label for="ac-2">What is bandwidth?</label>
        	<article class="content">
            <p>Bandwidth is the amount of data your website can transfer per month, every month the bandwidth counter will reset.</p>
        	</article>
   		</div>
    	<div>
       		<input id="ac-3" name="faq" type="checkbox"/>
        	<label for="ac-3">How can I upload files?</label>
        	<article class="content">
            <p>You have two ways, the first one (recommanded), you can download a FTP client software, you will find recommanded free softwares to download on the "Free FTP Software" from the "Files" section on VistaPanel. The second way is to use our free "Online File Manager" on VistaPanel.</p>
        	</article>
    	</div>
    	<div>
        	<input id="ac-4" name="faq" type="checkbox"/>
        	<label for="ac-4">How can I use FTP?</label>
        	<article class="content">
            <p>You can view our tutorial on how to setup and use FTP to manage your files <a href="http://tutorials.securesignup.net/premium-cpanel-hosting/file-management/via-ftp-2.html">here</a>.</p>
        	</article>
    	</div>    
    	<div>
        	<input id="ac-5" name="faq" type="checkbox"/>
        	<label for="ac-5">Do you allow PHP and MySQL databases?</label>
        	<article class="content">
            <p>Yes, we allow PHP and MySQL.</p>
        	</article>
    	</div>     
    	<div>
        	<input id="ac-6" name="faq" type="checkbox"/>
        	<label for="ac-6">Do you offer PHPMyAdmin?</label>
        	<article class="content">
            <p>Yes we do offer PUPMyAdmin.</p>
        	</article>
    	</div>    
    	<div>
        	<input id="ac-7" name="faq" type="checkbox"/>
        	<label for="ac-7">What type of websites are not allowed to be hosted?</label>
        	<article class="content">
            <p>Anything illegal, websites that contains copyrighted files (warez), adult content, spamming scripts, web proxies etc... For more information please read our TOS.</p>
        	</article>
    	</div>     
    	<div>
        	<input id="ac-8" name="faq" type="checkbox"/>
        	<label for="ac-8">How do I report a website?</label>
        	<article class="content">
            <p>We would really appreciate it, the best way is to open a ticket from VistaPanel, if not, you can email us at support@<?echo $yourdomain;?></p>
        	</article>
    	</div>      
    	<div>
        	<input id="ac-9" name="faq" type="checkbox"/>
        	<label for="ac-9">How do I get support?</label>
        	<article class="content">
            <p>To get technical support, open a ticket from VistaPanel, email us at support@<?echo $yourdomain;?> or join our <a>community forums</a>.</p>
       		</article>
    	</div>     
    	<div>
        	<input id="ac-10" name="faq" type="checkbox"/>
        	<label for="ac-10">What details should I post when asking for support?</label>
        	<article class="content">
            <p>Don't post your account's password, including databases passwords! And just be specific.</p>
        	</article>
    	</div>      
	</section>		
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