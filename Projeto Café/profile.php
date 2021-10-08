
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="/Coffe_Company/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="imagem/ico" href="/Images/ico.png" />
	<link rel="stylesheet" type="text/css" href="Profstyle.css" media="screen" />
	<link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<title>Profile</title>
</head>
<body>

	<!--Start menu-->
	<div id="div-menu">
		<header>
	      <nav class="navbar navbar-expand-sm">
	        <div class="container">

	        	<a href="/index.php" class="navbar-brand">
	            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxtjTnojpJ69nmctkLZf1M3OviJ6LVFItJzL5dy2DkPe0_4ap1WSjxWI9PQs8n_XVB5GU&usqp=CAU" width="40" style="">
	        	</a>

	          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
	            <img class="navbar-toggler-icon" src="https://i.pinimg.com/736x/ee/c0/71/eec071442e9a1b8e017c5a7c1853b880.jpg">
	          </button>

	          <div class="collapse navbar-collapse" id="nav-principal">
	            <ul class="navbar-nav ml-auto" style="">
	              <li class="nav-item">
	                <a href="/Coffe_Company/Shop/shop.php" class="nav-link text-white menu-learn"><i class="bi bi-shop icons-position"></i>Shop</a>
	              </li>
	              <li class="nav-item">
	                <a href="/Our_coffee/index.php" class="nav-link text-white menu-learn"><i class="bi bi-cup"></i>Our coffee</a>
	              </li>
	              <li class="nav-item">
	                <a href="/Coffe_Company/About/about_us.php" class="nav-link text-white menu-learn"><i class="bi bi-building"></i>About us</a>
	              </li>
	              <li class="nav-item">
	                <a href="/index.php" class="nav-link text-white menu-learn"><i class="bi bi-house-door"></i>Home</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link text-white menu-learn" style="margin-left: 30px; margin-right: -90px;" href="/logoff.php">LOGOUT</a>
	              </li>
	            </ul>
	          </div>
	        </div>
	      </nav>
	    </header>
    </div>
<!-- dps mudar tudin pra ficar com credencial do user-->
    <img class="background-img" src="https://www.nvidia.com/content/dam/en-zz/Solutions/GeForce/Pascal/metatags/geforce-pascal-1070ti-hero-1280x600.jpg">
    <div>
    	<div class="box-informations">
    		<img class="img-avatar" title="avatar" src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
    		<h1>User here</h1>
    	</div>
    </div>
    <div class="box-informations2">
    	<h3 class="information">About</h3>
    	<a class="link-about" href="#">Add a few words about who you are.</a>
    </div>
    <div class="box-informations3">
    	<h3 class="information">Ideas</h3>
    	<h3 class="number-idea">0</h3>
    	<h3 class="number-idea">0</h3>
    	<h3 class="number-idea">0</h3>
    	<h6 class="text-min">Followers</h6>
    	<h6 class="text-min2">Following</h6>
    	<h6 class="text-min3">Evaluations</h6>
    </div>
    <div class="box-informations4">
    	<h3 class="information">Cart</h3>
    	<p>You don't have anything in your cart,<a href="/Coffe_Company/Shop/shop.php" class="ml-2">click here</a> and start adding products to your cart</p>
    </div>

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