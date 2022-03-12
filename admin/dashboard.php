<?php require('layout/header.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>						
<?php
if (isset($_SESSION['msg'])) {
	echo '<div class="section white-text" style="background:#27265C;">'.$_SESSION['msg'].'</div>';
	unset($_SESSION['msg']);
}
?>
<div class="section white-text center" style="background:#27265C; margin-top: 30px; font-family: 'Cabin',sans-serif; font-size: 3.5rem;">
<img class="svg-logo" src="images/RNSIT.png" style="height: 120px; width: 135px;">	
    <h4>ADMIN <br> DASHBOARD</h4>	
	<div class="row" style="padding: 50px;">
		<div class="col s12">
                    <a class="dash-btn" href="food-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; cursor: pointer; font-size: 20px; background: linear-gradient(to right, black, black);">Foods</div></a>
		    <a class="dash-btn" href="category-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; cursor: pointer; font-size: 20px; background: linear-gradient(to right, black, black);">Categories</div></a>
		    <a class="dash-btn" href="order-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; cursor: pointer; font-size: 20px; background: linear-gradient(to right, black, black);">Orders</div></a>
                    <a class="dash-btn" href="Order_Completed-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; cursor: pointer; font-size: 20px; background: linear-gradient(to right, black, black);">Completed-Orders</div></a>		  
                </div>
	</div>
</div>
<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>