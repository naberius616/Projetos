<?php
session_set_cookie_params(0,"/","",False,True);
session_start();
if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true))
{
  unset($_SESSION['username']);
  unset($_SESSION['password']);	
  header('location: /Sign_in.php');
  die();
  }
$on = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="/Coffe_Company/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="imagem/ico" href="https://cdn.iconscout.com/icon/free/png-512/coffee-pouch-1894903-1604920.png" />
	<link rel="stylesheet" type="text/css" href="Buy.css" media="screen" />
	<link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
	<title>Sha256 Coffee</title>
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

    <!--Product name shop-->
    <div class="tittle-text">
    	<hr>
    		<p class="text-sm-center coffee">Coffee > Sha256 Coffee > 250g</p>
    	<hr>
    </div>

    <div class="img_buy">
    	<img class="animation" src="https://i.pinimg.com/736x/63/06/bd/6306bd24a7ced57c969bb6c73841272d.jpg">
    </div>

    <div class="tittle_buy">
    	<h1>Sha256 Coffee -250g</h1>
    </div>

    <div class="stars_evaluation">
    		<img width="15px" src="Images/star.png">
    		<img width="15px" src="Images/star.png">
    		<img width="15px" src="Images/star.png">
    		<img width="15px" src="Images/star.png">
    		<img width="13px" src="Images/star-white2.png">
    </div>

    <div class="input_quanti">
    	<input class="input-quantity" type="text" name="" value="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
    </div>

    <div class="prices_buttons">
    	<span>$25,00</span>
    	<button class="btn buttom-buy-buttom">Buy</button>
    </div>



    <div class="cards-position">
    	<p class="text-center details-product">PRODUCT DETAILS</p>

    	<div class="card-columns mb-5">
		    <!--Start image card-->
			<div class="card">
	      		<div class="card-body">
	       			<h4 class="card-title">Classic Coffee Beans</h4>
				    <p class="card-text">Rich and balanced with notes of caramel and chocolate.</p>
				    <p class="card-text">Quantity: Each can contains 250gr.</p>
	        	</div>
			</div>
			<!--End image card-->

			<!--Start image card-->
			<div class="card">
	      		<div class="card-body">
	       			<h4 class="card-title">POETRY IN COFFEE BEANS</h4>
				    <p class="card-text">Carefully selected and meticulously blended and roasted, illy coffee beans invoke sensual beauty and poetry in the passionate coffee lover. Opening a can means entering a world where the process of making coffee is more than a routine, it is a rich and pleasurable daily ritual. 50 grains of the illy blend are able to transform a cup. A real poetry in a can of 250 grams!</p>
	        	</div>
			</div>
			<!--End image card-->

			<!--Start image card-->
			<div class="card">
	      		<div class="card-body">
	       			<h4 class="card-title">UNIQUE SENSATION</h4>
				    <p class="card-text">We could offer you every region, toast and leave under the sun. But we'd rather give you the perfect one. We have spent eight decades refining a unique and unique blend - celebrated around the world as the pinnacle of what coffee can be.</p>
	        	</div>
			</div>
			<!--End image card-->
    	</div>
    </div>

    <div>
	    <!--Start box comment-->
	    <div class="comments">
	    	<p>24 COMMENTS</p>
	    	<div class="decoration"></div>
	    	<div>
	    		<input class="inpt-comment" type="text" name="comment" placeholder="Type your comment here">
	    		<a class="btn btn-comment" href="">Comment</a>

	    		<style type="text/css">
	    			.inpt-comment {
					   margin-top: 50px;
					   width: 70%;
					   height: 100px;
					   border-radius: 20px;
					   border-style: solid;
					   text-indent: 10px;
					   color: white;
					   background-color: #1b1c1c;
					}

					.inpt-comment:focus {
					   outline: none;
					   border-color: green;
					   transition-duration: 0.8s;
					}

					.inpt-comment:hover {
					   border-color: green;
					   transition-duration: 1.0s;
					}

					.btn-comment {
						width: 150px;
						opacity: 90%;
						font-weight: bold;
						color: white;
						border-radius: 20px;
						background-color: green;
						margin-left: -15%;
						margin-top: 150px;
						transition-duration: 0.8s;
					}	

					.btn-comment:hover {
						color: white;
						background-color: black;
						transition-duration: 0.8s;
					}

					@media (max-width:  600px) {
						   .btn-comment {
      							margin-left: -40% !important;
       							margin-top: 150px;
   							}  
					}

				</style>
	    	</div>
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Naberius-comment.png">
	    			<span class="Naberius-comment-nick">Naberius</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Top 👌</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment.jpeg">
	    			<span class="Naberius-comment-nick">Naine</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment2.jpeg">
	    			<span class="Naberius-comment-nick">Alberto</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment3.jpeg">
	    			<span class="Naberius-comment-nick">Júlia</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment4.jpeg">
	    			<span class="Naberius-comment-nick">Luiz</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment16.jpeg">
	    			<span class="Naberius-comment-nick">Lívia</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment6.jpeg">
	    			<span class="Naberius-comment-nick">Isabela</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment7.jpeg">
	    			<span class="Naberius-comment-nick">Sofia</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment8.jpeg">
	    			<span class="Naberius-comment-nick">Bárbara</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment9.jpeg">
	    			<span class="Naberius-comment-nick">Eduarda</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment10.jpeg">
	    			<span class="Naberius-comment-nick">Enzo</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment11.jpeg">
	    			<span class="Naberius-comment-nick">Sophie</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Porque-comment.png">
	    			<span class="Naberius-comment-nick">Gamestats</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Muito gostoso, porém prefiro um cappuccino. 🤝</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment12.jpeg">
	    			<span class="Naberius-comment-nick">Vitor</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment13.jpeg">
	    			<span class="Naberius-comment-nick">Miller</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment14.jpeg">
	    			<span class="Naberius-comment-nick">Emily</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/comment15.jpeg">
	    			<span class="Naberius-comment-nick">Pedro</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Tynuz-comment.png">
	    			<span class="Naberius-comment-nick">Sauce</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">MUITO BOM! Café perfeito, comprei para a minha familia inteira</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Mug-comment.png">
	    			<span class="Naberius-comment-nick">SpeeDuck</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Fuck 😎. Putz phi putz pu phsi.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Bruno-comment.png">
	    			<span class="Naberius-comment-nick">Bruno Fraga</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    			</div>
	    		<p class="text-comment">Café saboroso, me deixa acordado por 72 horas.</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Exodus236-comment.png">
	    			<span class="Naberius-comment-nick">Nucnuc</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<marquee><p class="text-comment">XSS testeeeeeeee</p></marquee>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Sam-comment.png">
	    			<span class="Naberius-comment-nick">Sepiou</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Rodrigo Faro</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Gustavo-comment.gif">
	    			<span class="Naberius-comment-nick">Abadon</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Cade meu Iphone que não chega. 🤬</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->

	    <!--Start box comment-->
	    <div class="comments2">
	    	<div class="background-box">
	    		<div>
	    			<img class="Naberius-comment-avatar" src="Images/Emme-comment.png">
	    			<span class="Naberius-comment-nick">THzin</span>
	    			<div class="evaluation-stars">
	    				<img class="evaluation-comment" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="15px" src="Images/star.png">
	    				<img class="evaluation-comment2" width="13px" src="Images/star-white2.png">
	    			</div>
	    		<p class="text-comment">Nice coffee! I lik this coffe because I like</p>
	    		</div>
	    	</div>
	    </div>	
	    <!--End box comment-->
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

	<script type="text/javascript">
		let progress = document.getElementById('progressbar');

		let totalHeight = document.body.scrollHeight -window.innerHeight;

		window.onscroll = function () {
			let progressHeight = (window.pageYOffset / totalHeight) * 100;
			progress.style.height = progressHeight + "%";
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

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/Coffe_Company/js/bootstrap.min.js"></script>
</body>