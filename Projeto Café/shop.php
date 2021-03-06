<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="/Coffe_Company/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="imagem/ico" href="https://cdn.iconscout.com/icon/free/png-512/coffee-pouch-1894903-1604920.png" />
	<link rel="stylesheet" type="text/css" href="shop.css" media="screen" />
	<link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<title>Shop</title>
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
	                <a href="/Our_coffee/index.php" class="nav-link text-white menu-learn"><i class="bi bi-cup"></i>Our coffee</a>
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
	                <a class="nav-link text-white menu-learn" style="margin-left: 30px;" href="/logoff.php">LOGOUT</a>
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

	<!--Start carousel-->
	<div id="carousel-controls" class="carousel slide mt-0" data-ride="carousel">
		<!-- Indicator start-->
		<ol class="carousel-indicators">
			<li class="#carousel-controls" data-slide-to="0"></li>
			<li class="#carousel-controls" data-slide-to="1"></li>
			<li class="#carousel-controls" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<!--Start item carousel-->
			<div class="carousel-item active">
				<img class="img_adjusty" width="100%" src="Images/coffee1.jpeg">
				<div class="carousel-caption">
					<h2 class="style-text">Welcome to shop</h2>
				</div>
			</div>

			<div class="carousel-item">
				<img class="img_adjusty" width="100%" src="Images/coffee2.jpeg">
				<div class="carousel-caption">
					<h3 class="style-text">More quality for you</h3>
				</div>
			</div>

			<div class="carousel-item">
				<img class="img_adjusty" width="100%" src="Images/coffee3.jpeg">
				<div class="carousel-caption">
					<h3 class="style-text">Our secret recipe is simply love</h3>
				</div>
				<style type="text/css">
					.style-text {
					   font-weight: bold;
					   font-family: sans-serif;
					   color: white;
					}
				</style>
			</div>
			<!--End-->
		</div>

		<!--Control preview-->
		<a href="#carousel-controls" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<!--Control preview end-->

		<!--Control next-->
		<a href="#carousel-controls" class="carousel-control-next" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
		<!--Control next end-->

	</div>

	 <!--Start cards-->
    <div class="container">
		<div class="card">
			<div class="content">
				<img src="https://i.pinimg.com/736x/63/06/bd/6306bd24a7ced57c969bb6c73841272d.jpg" alt="">
				<h3>Hacker Coffee</h3>
				<a class="price-decoration box" href="">$48,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Hacker_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://i.pinimg.com/originals/35/b8/51/35b85155d8b222bfcd7135cfada20266.png" alt="">
				<h3>Shell coffee</h3>
				<a class="price-decoration box" href="">$50,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Shell_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/129616386/original/48dd609f088298194478b8bbbc435b7633fc5efd/coffee-bag-packaging-design-your-brand.png" alt="">
				<h3>Priviesc coffee</h3>
				<a class="price-decoration box" href="">$35,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Priviesc_coffe.php">Buy</a>
			</div>
		</div>


		<div class="card">
			<div class="content">
				<img src="https://images-platform.99static.com/FnHOJECx-cWMySmYotZZg761GPY=/44x0:1455x1411/500x500/top/smart/99designs-contests-attachments/106/106293/attachment_106293450" alt="">
				<h3>Recon coffee</h3>
				<a class="price-decoration box" href="">$38,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Recon_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://images-platform.99static.com/Vhnh8isVsBtJOYtvXLACG-5IN-k=/0x0:2000x2000/500x500/top/smart/99designs-contests-attachments/84/84723/attachment_84723131" alt="">
				<h3>Bf coffee</h3>
				<a class="price-decoration box" href="">$60,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Bf_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://cdn.dribbble.com/users/2282250/screenshots/10772158/media/8e0b4930639c77b43cba8d3752775e2c.jpg?compress=1&resize=400x300" alt="">
				<h3>Binary cappuccino</h3>
				<a class="price-decoration box" href="">$75,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Binary_cappuccino_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://s3-eu-west-1.amazonaws.com/yi-files/content/2018/11/5bf55206a5c06.jpg" alt="">
				<h3>Hex cappuccino</h3>
				<a class="price-decoration box" href="">$46,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Hex_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="http://4.bp.blogspot.com/-pLN7Ip7gt_4/UDEm-CvdfII/AAAAAAAAJts/c711ZzQtyP4/s1600/coffee-packaging-design-8.jpg" alt="">
				<h3>ch???? 256 coffee</h3>
				<a class="price-decoration box" href="">$25,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Sha256_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://penji.co/wp-content/uploads/2019/12/Koffee_Kult-coffee-packaging-design.jpg" alt="">
				<h3>Frapuccino coffee</h3>
				<a class="price-decoration box" href="">$42,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Frapuccino_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://www.designerpeople.com/wp-content/uploads/2019/09/coffee-packet-design-1-1.jpg" alt="">
				<h3>Between coffee</h3>
				<a class="price-decoration box" href="">$23,60</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Between_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://images.squarespace-cdn.com/content/v1/5ecafa77a9658a4c95929454/1590368197375-TZMVW62CF5PQT4RFCD2B/Black-bear.jpg?format=1500w" alt="">
				<h3>Cowafee coffee</h3>
				<a class="price-decoration box" href="">$32,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/owafee_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://www.designerpeople.com/wp-content/uploads/2019/09/coffee-pouch-packaging-design-3.jpg" alt="">
				<h3>Dev coffee</h3>
				<a class="price-decoration box" href="">$65,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Dev_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://cdn.dribbble.com/users/2085009/screenshots/14521543/media/f8024bf03b9e62c238cf7d10533dee71.png?compress=1&resize=400x300" alt="">
				<h3>Edward coffee</h3>
				<a class="price-decoration box" href="">$57,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Edward_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="http://1.bp.blogspot.com/-L1NPW8slp1E/UDEmmwmC1tI/AAAAAAAAJqQ/lQu2tZMi2eA/s1600/coffee-packaging-design-2.jpg" alt="">
				<h3>Snowden coffee</h3>
				<a class="price-decoration box" href="">$53,00</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/Snowden_coffee.php">Buy</a>
			</div>
		</div>

		<div class="card">
			<div class="content">
				<img src="https://i.pinimg.com/originals/27/5e/8b/275e8b52996a1eba4f570991a32006b4.jpg" alt="">
				<h3>NSA coffee</h3>
				<a class="price-decoration box" href="">$51,50</a>
				<span>/250gr</span>
				<a class="btn btn-card-image btn-block" href="/Coffe_Company/Buy/NSA_coffee.php">Buy</a>
			</div>
		</div>
	</div>
	<!--End cards-->

	


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

	<script type="text/javascript">
		function funcao() {

            let y = window.scrollY

            if(y > 50){
                document.body.style.backgroundColor = 'red';
            }
            else {
                document.body.style.backgroundColor = 'white';
            }
        }
	</script>

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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>