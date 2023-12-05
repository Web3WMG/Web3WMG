<?PHP
// This is used to geneate a unique number for catchpa
$id = md5(rand(6000,PHP_INT_MAX));
// This is used to constuct the cPanel login url
include('geturl.php');
?>

<script type="text/javascript">
function ismaxlength(obj){
        var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : ""
        if (obj.getAttribute && obj.value.length>mlength)
                obj.value=obj.value.substring(0,mlength)
}
</script>
<!DOCTYPE html>
<html>
<head>
<!-- Template designed by iFastNet (iFastNet.com) exclusively for MyOwnFreeHost.com users -->
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1 width=device-width">
	<title>Free Hosting Signup</title>
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
 <h2>Please fill out the form below</h2>

		</div>
</div>
                <form id="updatedetails" name="updatedetails" class="signup" method=post action="http://order.<?echo $yourdomain;?>/register2.php">
                        <table>
                                <div class="form-group">
                                <tr><th>Username<td><input class="form-control" type=text name=username size=30 value=""  maxlength="16" onkeyup="return ismaxlength(this)"><td>
                                </div>

                                <div class="form-group">
                                <tr><th>Password<td><input class="form-control" type=password name=password size=30 maxlength="8" onkeyup="return ismaxlength(this)"><td>
                                </div>

                                <div class="form-group">
                                <tr><th>Email Address<td><input class="form-control" type=text name=email size=30 value=""></td></tr>
                                </div>

                                <div class="form-group">
                                <tr><th>Site Category<td><select  class="form-control" size="1" name="website_category">
                                <option>Personal</option>
                                <option>Business</option>
                                <option>Hobby</option>
                                <option>Forum</option>
                                <option>Adult</option>
                                <option>Dating</option>
                                <option>Software / Download</option>
                                </select>
                                </td></tr>
                                </div>

                                <div class="form-group">
                                <tr><th>Site Language<td>
                                <select  class="form-control" size="1" name="website_language">
                                <option>English</option>
                                <option>Non-English</option>
                                </select>
                                </td></tr>
                                </div>
                                <input type=hidden name=id value="<?PHP echo $id; ?>">
                                <tr><th>Security Code<td><div ><img width="250px" height="90px" src="http://order.<? echo "$yourdomain" ;?>/image.php?id=<?PHP echo $id; ?>"></div><td>
                                <tr><th>Enter Security Code<td><input class="form-control" type=text name=number size=30><td>
                                <tr><th colspan=2><button type="submit" class="btn btn-primary">Submit</button><td></tr>
                        </table>
                </form>
      </div>
      <div class="body_small">
        <h3>To use your own domain</h3>
        <p>You may not find the email confirmation in your inbox, so please check your Spam inbox.</p>
        <h3>To use your own domain</h3>
        <p>If you want to use your own domain name from third parties (free or premium), please remember to set your domain nameservers to ours, then complete the signup form above, then add your domain to your cPanel using Addon Domain:
                <br /><span>ns1.<?echo $yourdomain;?></span>
                        <br /><span>ns2.<?echo $yourdomain;?></span>
        </p>
      </div>
	</div>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
</body>
<!-- Template designed by iFastNet (iFastNet.com) exclusively for MyOwnFreeHost.com users -->
</html>
