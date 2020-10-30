<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bay View</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
	<script type="text/javascript" async src="cart.js"></script>
	<style type="text/css">

		body{
			overflow-x: hidden;
			background-image: url(./images/bg11.jpg);
		}

		.logo img{
			height:55px;
		}

		.nav-link{
			padding: 8px 10px 8px !important;
		}

		.navigation a{
			font-size: 17px;
			color: black;
		}

		.navigation a:hover{
			color: #ff5c33;
		}


		.navigation a.active-link{
			background-color: #ff5c33;
			color: 	white;
			border-radius: 5px;
			
		}
/*		.jumbotron{
			background-image: url("./images/food61.jpg");
			background-position: top left;
			height: 250px;
			margin-bottom: 40px;
		}*/

		.jumbtext{
			color: #404040;
			/*width: 30%;*/
			position: relative;
			top: 60%;
			left: 38%;
		}

		.jumbtext h2{
			font-family: 'Merriweather', serif;
			letter-spacing: 1px;
			font-weight: 900;
			font-size: 40px;
		}

		.navbar-center { 
            position: relative; 
            left: 27%;
        } 
        .navi{
        	background-color: #404040;
        }

        .navi nav{
        	padding: 0px; 
        	 margin-bottom: 40px;
        }

        .navi li{
        	margin-left: 20px;
        }

		.navi a{
			font-family: 'Merriweather', serif;
			color: #ff4040;
			font-size: 20px;
		}

		.navi a:hover{
			color: white;
			background-color: #ff5c33;
		}

		.vmenu{
			background-color: #404040;
			width: 15%;
			padding: 10px;
			position: fixed;
			z-index: 1;
			overflow-x: hidden;
		}

		.vmenu a{
			color: #ff3030;
		}

		.vmenu a:hover{
			background-color: white;
		}

		.card img{
			height: 270px;
		}

		.card {
			/*height: 82.5%;*/
			margin-bottom: 20px;
			text-align: center;
		}

		.card-text{
			font-style: italic;
			font-size: 16px;
			color: #404040;
		}

		.card a:hover{
			color: #404040;
		}

		.btn{
			color: white;
			background-color: #ff5c33;
		}


		.btn1:hover{
			background-color: #404040;
		}


		.modal-header h4{
			text-align: center;
			font-family: 'Merriweather', serif;
			letter-spacing: 1px;
			font-weight: 900;
		}

		.cart-price{
			margin-top: 10px;
		}

		.cart-total{
			margin-top: 20px;
			margin-bottom: 10px;
		}

		.fa{
			font-size: 30px;
			margin-right: 10px;
		}

		.foot{
			background-color: lightgrey;
		}
	</style>
</head>
<body >
	<nav class="navbar navbar-expand-lg">
	<div class="container navigation">
	  <a class="navbar-brand logo" href="index.php">
	  	<img src="./images/logo21.png">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>


	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item px-2">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link active-link" href="#">Menu</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="about_us.php">About</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="contactus.php">Contact Us</a>
	      </li>
	      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <a class="dropdown-item" href="#">My Orders</a>
            <a class="dropdown-item" href="logout.php">LogOut</a>
          </div>
        </li>


	    </ul>
	  	</div>
	  	</div>
	</nav>


<!-- <div class="jumbotron">
	<div class="jumbtext">
	  </div>
	</div>
 -->
<div class="container-fluid">
<div class="row">
<div class="col-lg-2">
<div class="vmenu" id="vmenus">

<ul class="nav flex-column menu">
  <li class="nav-item">
    <a class="nav-link" href="#special">Chef's Special</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#bestsellers">Bestsellers</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#breakfast">Breakfast</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#starter">Starter</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#maincourse">Main Course</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#desserts">Desserts</a>
  </li>

   <li class="nav-item">
    <a class="nav-link" href="#beverages">Beverages</a>
  </li>

</ul>
</div>
</div>


<div class="col-lg-10">



<div id="special">
<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
	<h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">Chef's Special</h3>
</div>
<div class="container" style="width:95%; margin: auto;">
<div class="shop-items">
<div class="shop-item">
<div class="row sp">
<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="images/f11.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Cheese Chicken Salad</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 220</p>
    </div>
    <p class="card-text">All white meat, shredded chicken, finely minced celery, mayonnaise, & our secret seasoning.</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="./images/f21.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Triple Chocolate Truffle</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 190</p>
    <p class="card-text">Milk chocolate ganache centre coated in dark chocolate and chopped toasted nuts </p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
  </div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/f31.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Oats and Honey Pancakes</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 170</p>
    <p class="card-text">Oats pancakes drizzled with honey and topped with a dash of cinnamon</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/f41.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Egg Fried Rice</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 170</p>
    <p class="card-text">Spicy rice along with stir fried vegetables topped with half-done eggs</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/f51.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Oreo Brownie</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 170</p>
    <p class="card-text">Decadent fudgy chocolate brwnies topped with oreo crumble and vanilla ice-cream</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/f61.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Sweet Potato Fries</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 170</p>
    <p class="card-text">Healthy sweet potato baked fries with a side of special salsa and mayo dip</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>







<div id="bestsellers">
<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
  <h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">Bestseller</h3>
</div>
<div class="container" style="width:95%; margin: auto;" id='bestsellers'>
<div class="shop-items">
<div class="shop-item">
<div class="row sp">
<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="images/b11.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Eggs Benedict</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 210</p>
    </div>
    <p class="card-text">Two halves of english muffins topped with poached eggs and holladaise sauce</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="./images/b21.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Chicken Ravioli</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 230</p>
    <p class="card-text">Spicy marinara chicken filling in a thin pasta dough cooked with creamy sauce</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
  </div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/b31.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Paneer Satay</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 200</p>
    <p class="card-text">Paneer marianated with tomato based sauce and smoked with charcoal</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/b82.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">White Sauce Pasta</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 170</p>
    <p class="card-text">Pasta cooked in creamy cheddar and mozarella cheese sauce topped with italian herbs</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/b71.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Cream of Tomato Soup</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 150</p>
    <p class="card-text">Creamy thicm soup made with smoked tomatoes and garlic topped with fresh cream</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/b93.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Chocolate cupcake creamcheese frosting</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 110</p>
    <p class="card-text">Dark chocolate cupcake along with vanilla creamcheese frosting</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>


<div id="breakfast">
<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
	<h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">Breakfast</h3>
</div>
<div class="container" style="width:95%; margin: auto;">
<div class="shop-items">
<div class="shop-item">
<div class="row sp">
<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="images/br1.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Rava Dosa</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 200</p>
    </div>
    <p class="card-text">Crispy rava dosa with a side of white and green chutney and our special sambhar</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="./images/br31.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Eggs on Avacado Toast</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 210</p>
    <p class="card-text">Poached eggs on the top of creamy mashed avacado along with crispy toast</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
  </div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/f31.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Oats and Honey Pancakes</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 170</p>
    <p class="card-text">Oats pancakes drizzled with honey and topped with a dash of cinnamon</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/br6.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Idli Chutney and Sambhar</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 180</p>
    <p class="card-text">Soft idlis along with a side of white nad green chutney and our special sambhar</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/br41.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Misal Pav</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 160</p>
    <p class="card-text">Misal topped with spicy tari along with buttered pav, onion and lemon</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/br51.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Fruit Yoghurt Parafait</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 190</p>
    <p class="card-text">Greek yoghurt tooped with blueberries, rasberries, granola and various nuts</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>


<div id="starter">
<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
	<h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">Starters</h3>
</div>
<div class="container" style="width:95%; margin: auto;">
<div class="shop-items">
<div class="shop-item">
<div class="row sp">
<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="images/st0.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Spring Rolls</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 200</p>
    </div>
    <p class="card-text">Crispy outer coverong with spicy vegetable filling with a side of habanero sauce</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="./images/st2.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Shrimp Tempura</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 240</p>
    <p class="card-text">Japanese dish consisiting of fresh shrimp battered and deep fried with a side of a spicy dip</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
  </div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/st41.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Honey Chilly Chicken</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 230</p>
    <p class="card-text">Tender chicken cooked in sweet and spicy sauce toped with some seasame seeds</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/st5.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Fish And Chips</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 220</p>
    <p class="card-text">Classic british dish consisiting of fried fish in batter served with chips and spicy dip</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/f61.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Sweet Potato Fries</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 190</p>
    <p class="card-text">Healthy sweet potato baked fries with a side of special salsa and mayo dip</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/st6.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Grilled Herb Tofu</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 190</p>
    <p class="card-text">Grilled herb infused tofu tooped with vegetables and creamy spicy sauce</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>



<div id="maincourse">
<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
	<h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">Main Course</h3>
</div>
<div class="container" style="width:95%; margin: auto;">
<div class="shop-items">
<div class="shop-item">
<div class="row sp">
<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="images/b11.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Eggs Bendict</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 200</p>
    </div>
    <p class="card-text">Two halves of english muffins topped with poached eggs and holladaise sauce</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="./images/b21.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Chicken Ravioli</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 250</p>
    <p class="card-text">Spicy marinara chicken filling in a thin pasta dough cooked with creamy sauce</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
  </div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/b61.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Cheese Cherry Tomato Pizza</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 220</p>
    <p class="card-text">Thin crust pizza topped with cheese and grilled cherry tomatoes</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/b82.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">White Sauce Pasta</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 200</p>
    <p class="card-text">Pasta cooked in creamy cheddar and mozarella cheese sauce topped with italian herbs</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/chef7.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Chilly Garlic Spaghetti</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 230</p>
    <p class="card-text">Spaghetti cooked in our secret chilly and garlic sauce topped with some basil</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/f41.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Egg Fried Rice</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 240</p>
    <p class="card-text">Spicy rice along with stir fried vegetables topped with half-done eggs</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>

<div id="desserts">
<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
	<h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">Desserts</h3>
</div>
<div class="container" style="width:95%; margin: auto;">
<div class="shop-items">
<div class="shop-item">
<div class="row sp">
<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="images/f21.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Triple Chocolate Truffle</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 160</p>
    </div>
    <p class="card-text">Milk chocolate ganache centre coated in dark chocolate and chopped toasted nuts </p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/d2.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Chocolate Mousse</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 120</p>
    <p class="card-text">Light and airy rich chocolate mousse topped with some frozen pomegranate</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>
</div>


<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/b94.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Red Velvet Cake</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 270</p>
    <p class="card-text">Crimson-colored two layered spongy cake with smooth cream-cheese frosting</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top shop-item-image" src="./images/b93.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Chocolate cupcake creamcheese frosting</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 110</p>
    <p class="card-text">Dark chocolate cupcake along with vanilla creamcheese frosting</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
  </div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/d1.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Dutch Chocolate Pastry</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 120</p>
    <p class="card-text">Rich dutch chocolate pastry with milk chocolate frosting and topped with a rasberry reduction</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>



<div class="col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/f51.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Oreo Brownie</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 170</p>
    <p class="card-text">Decadent fudgy chocolate brwnies topped with oreo crumble and vanilla ice-cream</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>

<div id="beverages">
<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
	<h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">Beverages</h3>
</div>
<div class="container" style="width:95%; margin: auto;">
<div class="shop-items">
<div class="shop-item">
<div class="row sp">
<div class="col-lg-4">
  <div class="card" style="width: 17rem;">
  <img class="card-img-top shop-item-image" src="images/be11.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Orange Martini</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 200</p>
    </div>
    <p class="card-text">Orange flavored gin and vermouth, and garnished with a lemon twist</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./images/be21.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Blue Lagoon</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 170</p>
    <p class="card-text">Blue Curaçao mixed with vodka and lemonade garnished with a lemon slice</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
</div>
</div>


<div class="col-lg-4">
  <div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./images/be41.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Virgin Mohito</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 150</p>
    <p class="card-text">Refreshing drink consisting of carbonated water along with lemon and mint</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 17rem;">
  <img class="card-img-top shop-item-image" src="./images/be31.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title">Passion Fruit Spritz</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 190</p>
    <p class="card-text">Cocktail consisting of prosecco, Aperol and soda water with a twist of passion fruit</p>
    <center><a href="#" class="btn shop-item-button" data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
  </div>
  </div>
</div>

<div class="col-lg-4">
  <div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./images/be51.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Moscow Mule</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 200</p>
    <p class="card-text">Made with vodka, spicy ginger beer, lime juice, garnished with a slice or wedge of lime and mint</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>



<div class="col-lg-4">
  <div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./images/be61.jpg">
  <div class="card-body">
    <h5 class="card-title shop-item-title shop-item-image">Rasberry Mint Limeade</h5>
    <div class="shop-item-details">
    <p class="shop-item-price">Rs 160</p>
    <p class="card-text">Carbonated water clubbed with lime juice, fresh mint and frozen rasberries</p>
    <center><a href="#" class="btn shop-item-button"  data-toggle="modal" data-target="#exampleModal">Add to cart</a></center>
  </div>
</div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>




</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="container content-section">
            <div class="cart-row">
            </div>
            <div class="cart-items">
            </div>
            <center><div class="cart-total" >
                <strong class="cart-total-title" >Total</strong>
                <span class="cart-total-price">Rs 0</span>
            </div></center>
          	<center><button class="btn btn1 btn-purchase" type="button">PURCHASE</button></center>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn1" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>




<footer class="page-footer font-small stylish-color-dark pt-4 foot" id="footer">

  <!-- Footer -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Bay View Cafe</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- -->
        <h5 class="font-weight-bold mt-3 mb-4">Opening Hours</h5>

        <ul class="list-unstyled">
          <li>
            <p>Monday to Friday : 9 am to 11 pm</p>
          </li>
          <li>
          	<p>Saturday : 11 am to 11 pm</p>
          </li>
          <li>
            <p>Sunday : 9 am to 12 am</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- -->
        <h5 class="font-weight-bold mt-3 mb-4">Our Social Media</h5>

         <ul class="list-unstyled list-inline">
	    <li class="list-inline-item">
	      <a>
	        <i class="fa fa-facebook-square"> </i>
	      </a>
	    </li>
	    <li class="list-inline-item">
	      <a>
	        <i class="fa fa-instagram"> </i>
	      </a>
	    </li>
	    <li class="list-inline-item">
	      <a>
	        <i class="fa fa-youtube-play"> </i>
	      </a>
	    </li>
 		</ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <hr>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">BayView.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">
	$(document).scroll(function() {
    checkOffset();
	});

	function checkOffset() {
    if($('#vmenus').offset().top + $('#vmenus').height() 
                                           >= $('#footer').offset().top - 10)
        $('#vmenus').css('position', 'absolute');
    if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top)
        $('#vmenus').css('position', 'fixed'); // restore when you scroll up
}
</script>

</body>
</html>