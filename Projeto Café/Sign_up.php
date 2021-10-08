<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="/Coffe_Company/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="imagem/ico" href="https://cdn.iconscout.com/icon/free/png-512/coffee-pouch-1894903-1604920.png" />
	<link rel="stylesheet" type="text/css" href="Sign_up.css" media="screen" />
	<link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<title>Sign_up</title>
</head>
<body>

	<!--Start menu-->
	<div id="div-menu">
		<header>
	      <nav class="navbar navbar-expand-sm">
	        <div class="container">

	        	<a href="#" class="navbar-brand">
	            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxtjTnojpJ69nmctkLZf1M3OviJ6LVFItJzL5dy2DkPe0_4ap1WSjxWI9PQs8n_XVB5GU&usqp=CAU" width="40" style="">
	        	</a>

	          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
	            <img class="navbar-toggler-icon" src="https://i.pinimg.com/736x/ee/c0/71/eec071442e9a1b8e017c5a7c1853b880.jpg">
	          </button>

	          <div class="collapse navbar-collapse" id="nav-principal">
	            <ul class="navbar-nav ml-auto" style="">
	              <li class="nav-item">
	                <a href="" class="btn btn-sign-up ml-4 disabled"><i class="bi bi-door-closed"></i>Sign up</a>
	              </li>
	              <li class="nav-item">
	                <a href="/Sign_in.php" class="btn btn-sign-in ml-4"><i class="bi bi-door-open"></i>Sign in</a>
	              </li>
	            </ul>
	          </div>
	        </div>
	      </nav>
	    </header>
    </div>
    <!--End menu-->

    <!--Start menu sign up-->
    <div class="box_logo">
    	<img class="logo" width="100px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxtjTnojpJ69nmctkLZf1M3OviJ6LVFItJzL5dy2DkPe0_4ap1WSjxWI9PQs8n_XVB5GU&usqp=CAU">
    </div>
	    <div class="container">
	    	<div class="row">
	    		<div id="box-register" style="height: 630px;">
	    			<form method="POST" action="Create_user.php">
	    				<h1 class="text-center sign-up-text">Sign up</h1>
	    				<p class="email-text">Email</p>
	    				<input class="inpt1" type="text" name="create_email" placeholder="Create a email">

	    				<p class="password-text">Username</p>
	    				<input class="inpt1" type="text" name="create_email" placeholder="Create a username">
						
	    				<p class="password-text">Password</p>
	    				<input class="inpt1" type="password" name="create_password" placeholder="Create a password">

	    				<p class="password-text">Confirm password</p>
	    				<input class="inpt1" type="password" name="confirm-password" placeholder="Confirm your password">

	    				<button class="btn btn-confirm-sign-up" id="sign_up" name="sign_up" type="submit">Sign up</button>
	    			</form>
	    		</div>
	    	</div>
	    </div>
	    <!--End menu sign up-->

    <!--Start footer-->
    <div class="Footer_box">
    	<div class="img_center">
    		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxtjTnojpJ69nmctkLZf1M3OviJ6LVFItJzL5dy2DkPe0_4ap1WSjxWI9PQs8n_XVB5GU&usqp=CAU">
    	</div>
    	<div class="footer_tittle">
    		<span>ENTERPRISE</span>
    		<span>COMMUNITY</span>
    		<span>USEFUL LINKS</span>
    	</div>

    	<div class="footer_link1">
    		<a href="#"><span>Envelope</span></a>
    	</div>

    	<div class="footer_link2">
    		<a href="#"><span>Discord</span></a>
    	</div>

    	<div class="footer_link3">
    		<a href="#"><span>Support</span></a>
    	</div>

    	<div class="footer_link4">
    		<a href="#"><span>Jobs</span></a>
    	</div>

    	<div class="footer_link5">
    		<a href="#"><span>Telegram</span></a>
    	</div>

    	<div class="footer_link6">
    		<a href="#"><span>E-mail</span></a>
    	</div>

    	<div class="footer_link7">
    		<a href="#"><span>Our Coffee</span></a>
    	</div>

    	<div class="footer_link8">
    		<a href="#"><span>Whatsapp</span></a>
    	</div>

    	<div class="others_links">
    		<ul class="list-inline">
    			<li class="list-inline-item"><a class="items-copyright" href="#">Privacy policy</a></li>
      			<li class="list-inline-item"><a class="items-copyright" href="#">Cookies</a></li>
      			<li class="list-inline-item"><a class="items-copyright" href="#">Privacy Center</a></li>
    		</ul>
    	</div>
	</div>
	<!--End footer-->


	<script>
		if (document.addEventListener) {
		    document.addEventListener("contextmenu", function(e) {
		        e.preventDefault();
		        return false;
		    });
		} else {
		    document.attachEvent("oncontextmenu", function(e) {
		        e = e || window.event;
		        e.returnValue = false;
		        return false;
		    });
		}
	</script>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/Coffe_Company/js/bootstrap.min.js"></script>
</body>
</html>