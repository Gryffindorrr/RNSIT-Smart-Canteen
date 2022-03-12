<section class="fnavbar">
		<div class="navbar">
		<nav>
		    <div class="nav-wrapper">
                      <img class="svg-logo" src="images/RNSIT.png" style="height: 65px; width: 65px;">
                      <a class="brand-logo" style="font-family: 'Cabin',sans-serif; font-size: 2.1rem;">RNSIT Smart Canteen</a>
		      <a class="sidenav-trigger"><i class="material-icons">Menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="/smart_canteen" class="hvr-grow">Home</a></li>
		        <li><a href="/smart_canteen/about-smart-canteen.php" class="hvr-grow">About Us</a></li>
		        <li><a href="food-categories.php" class="hvr-grow">Categories</a></li>
		        <li><a href="foods.php" class="hvr-grow">Foods</a></li>
		        <li><a href="#" class="hvr-grow" onclick="toggleModal('Contact Info', 'You can contact us using the number +91 8088288844. ');">Contact</a></li>
                        		        
		        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#" class="hvr-grow">Hi, '.$_SESSION['user'].'</a></li>
                                           <li><a href="OrderLinks.php" class="hvr-grow">My Orders</a></li> 
		        		<li><a href="logout.php" class="hvr-grow">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="hvr-grow modal-trigger" data-target="modal1">Login</a></li>
		        		<li><a href="#" class="hvr-grow modal-trigger" data-target="modal2">Register</a></li>';
		        	}

		        ?>
		        
		      </ul>
		    </div>
		  </nav>
		</div>
	</section>