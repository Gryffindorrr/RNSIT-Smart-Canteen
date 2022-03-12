<?php
require('backends/connection-pdo.php');            
$user=$_SESSION['user'];
$sql = "CALL `Ord_Status1`('$user')";
$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="Orders">
<div class="section black-text" style="background:#FFFFFF">
	<div class="section center" style="padding: 20px;">
		<table class="centered responsive-table">
        <thead>
          <tr>
              <th>Order ID</th>
              <th>User Name</th>
              <th>Food Name</th>
              <th>Timestamp</th>
              <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($arr_all as $key) {
          ?>
          <tr>
            <td><?php echo $key['id']; ?></td>
            <td><?php echo $key['user_name']; ?></td>
            <td><?php echo $key['fname']; ?></td>
            <td><?php echo $key['timestamp']; ?></td>
            <td><a><span class="new badge" data-badge-caption="">Preparing</span></a></td>
          </tr>
          <?php } ?>      
        </tbody>
      </table>
	</div>
</div>
</section>