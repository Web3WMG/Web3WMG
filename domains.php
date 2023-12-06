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
	<title>Domain Names Registration</title>
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
					<h1>Domain Names</h1>
					<h3>Register Yours Within Few Minutes!</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="latest">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="latest-title">
			<p align="center"><strong>Simple Domain Search</strong> | <a href="https://ifastnet.com/portal/domainchecker.php?search=bulkregister" target="_blank">Bulk Domain Search</a> | <a href="https://ifastnet.com/portal/domainchecker.php?search=bulktransfer" target="_blank">Bulk Domain Transfer</a></p>
			<p align="center">Enter the domain and tld you wish to use in the boxes below and click Lookup to see whether the domain is available for purchase.</p>
					</div>
				</div>
			</div>
		<div class="dsbox">
			<form method="post" action="https://ifastnet.com/portal/domainchecker.php" target="_blank">
		<input type="hidden" name="token" value="95865d5db41adbae256bfa7631a03a22a2c889cf" />
  			<div class="contentbox" align="center">
    	<input class="dsinput" type="text" name="domain" value="" size="40">
    	<br />
      <table class="table" border="0" align="center" cellpadding="10" cellspacing="0">
        <tr>      <td align="left"><input type="checkbox" id="c1" name="tlds[]" value=".info"/>
            <label for="c1"><span></span></label>.info</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c2" value=".biz"/><label for="c2"><span></span></label>
            .biz</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c3" value=".org"/><label for="c3"><span></span></label>
            .org</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c4" value=".com"/><label for="c4"><span></span></label>
            .com</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c5" value=".net"/><label for="c5"><span></span></label>
            .net</td>
          </tr>
        <tr>        <td align="left"><input type="checkbox" name="tlds[]" id="c6" value=".oo.gd"/><label for="c6"><span></span></label>
            .oo.gd</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c7" value=".mobi"/><label for="c7"><span></span></label>
            .mobi</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c8" value=".cc"/><label for="c8"><span></span></label>
            .cc</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c9" value=".co.uk"/><label for="c9"><span></span></label>
            .co.uk</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c10" value=".bz"/><label for="c10"><span></span></label>
            .bz</td>
          </tr>
        <tr>        <td align="left"><input type="checkbox" name="tlds[]" id="c11" value=".us"/><label for="c11"><span></span></label>
            .us</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c12" value=".name"/><label for="c12"><span></span></label>
            .name</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c13" value=".in"/><label for="c13"><span></span></label>
            .in</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c14" value=".co"/><label for="c14"><span></span></label>
            .co</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c15" value=".es"/><label for="c15"><span></span></label>
            .es</td>
          </tr>
        <tr>        <td align="left"><input type="checkbox" name="tlds[]" id="c16" value=".com.au"/><label for="c16"><span></span></label>
            .com.au</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c17" value=".cc.nf"/><label for="c17"><span></span></label>
            .cc.nf</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c18" value=".es.ht"/><label for="c18"><span></span></label>
            .es.ht</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c19" value=".ar.nf"/><label for="c19"><span></span></label>
            .ar.nf</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c20" value=".in.nf"/><label for="c20"><span></span></label>
            .in.nf</td>
          </tr>
        <tr>        <td align="left"><input type="checkbox" name="tlds[]" id="c21" value=".it.nf"/><label for="c21"><span></span></label>
            .it.nf</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c22" value=".mx.nf"/><label for="c22"><span></span></label>
            .mx.nf</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c23" value=".ro.nf"/><label for="c23"><span></span></label>
            .ro.nf</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c24" value=".ru.nf"/><label for="c24"><span></span></label>
            .ru.nf</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c25" value=".uk.nf"/><label for="c25"><span></span></label>
            .uk.nf</td>
          </tr>
        <tr>        <td align="left"><input type="checkbox" name="tlds[]" id="c26" value=".webs.nf"/><label for="c26"><span></span></label>
            .webs.nf</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c27" value=".ru"/><label for="c27"><span></span></label>
            .ru</td>
                  <td align="left"><input type="checkbox" name="tlds[]" id="c28" value=".ca"/><label for="c28"><span></span></label>
            .ca</td>
           </tr>
      </table>
      <br />
      	<input type="hidden" name="direct" value="true">
      	<input type="submit" class="dsbtn" id="Submit" value="Lookup" class="button square small black">
   	</div>
  		</form>
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