
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="/Coffe_Company/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="imagem/ico" href="https://cdn.iconscout.com/icon/free/png-512/coffee-pouch-1894903-1604920.png" />
	<link rel="stylesheet" type="text/css" href="coffee_our.css" media="screen" />
	<link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<title>Our Coffee</title>
	<style type="text/css">
		body {
			background-color: #111;
		}
	</style>
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
	                <a href="" class="nav-link text-white menu-learn"></a>
	              </li>
	              <li class="nav-item">
	                <a href="/Coffe_Company/Shop/shop.php" class="nav-link text-white menu-learn"><i class="bi bi-shop icons-position"></i>Shop</a>
	              </li>
	              <li class="nav-item">
	                <a href="/Coffe_Company/About/about_us.php" class="nav-link text-white menu-learn"><i class="bi bi-building"></i>About us</a>
	              </li>
	              <li class="nav-item">
	                <a href="/index.php" class="nav-link text-white menu-learn"><i class="bi bi-house-door"></i>Home</a>
	              </li>
	               <li class="nav-item">
	                <a href="/profile/profile.php" class=""><img width="40px" style="margin-left: 20px;" src="/Images/profile_index.jpg"></a>
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
    <!--End menu-->

    <div id="progressbar"></div>
    <div id="ScrollPath"></div>

    <div class="div-black">
    	<h1 class="text-white text-our-coffee">Our coffee:</h1>
    	<img class="img-coffee" src="Images/beans_coffee.jpg">
    </div>

    <div class="texts-div">
    	<h1>Why so expensive?</h1>
    	<img class="img_mug" src="Images/coffe_mug.jpg">
    	<p class="lead">At first, our type of coffee was extremely expensive because it depended on the goodwill of luwaks/civets to eat the fruits. In addition, the production was done on a low scale, making the product even more expensive. Prices reached $100!
		Now, however, farms and other spaces take these pets to expand the production of this coffee. The pets receive the fruit of coffee as food. 
		Although production has increased, this remains an unusual and still very expensive coffee. The prices are very "salty", however, I guarantee you will not regret</p>
		<h1>Origin</h1>
		<img class="coffee_origin" src="Images/coffe-origin.jpg" alt="">
		<p class="lead">Our coffee produced in the region of Italy, and became known for its somewhat peculiar production process. First, the grains are ingested by Civetas, mammals typical of Indonesia. During the digestive process, the animal releases enzymes and acids on the coffee bean, which goes through a natural fermentation process.Our coffee produced inside civeta acquires a slight taste of red fruits, with no acidity index and a slight bitter taste.</p>
    </div>

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

	<script type="text/javascript">
		let progress = document.getElementById('progressbar');

		let totalHeight = document.body.scrollHeight -window.innerHeight;

		window.onscroll = function () {
			let progressHeight = (window.pageYOffset / totalHeight) * 100;
			progress.style.height = progressHeight + "%";
		}
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/Coffe_Company/js/bootstrap.min.js"></script>

</body>
</html>