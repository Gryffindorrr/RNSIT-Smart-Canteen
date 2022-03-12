<?php require('layout/header.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>
<?php
require('../backends/connection-pdo.php');
$sql = 'SELECT orders.id, orders.user_name, orders.timestamp, food.fname FROM orders , food where orders.food_id = food.id';
$query = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="section white-text" style="background:#27265C">
    <div class="section">
        <h3>Orders</h3>
    </div>
    <?php
    if (isset($_SESSION['msg'])) {
        echo '<div class="section center" style="margin: 5px 35px;"><div class="row" style="background: red; color: white;">
        <div class="col s12">
            <h6>' . $_SESSION['msg'] . '</h6>
            </div>
        </div></div>';
        unset($_SESSION['msg']);
    }
    ?>
    <div class="section center" style="padding: 20px;">
        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User Name</th>
                    <th>Food Name</th>
                    <th>Timestamp</th>
                    <th>Action</th>
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
                        <td><a href="../backends/admin/Order_Complete.php?id=<?php echo $key['id']; ?>"><span class="new badge" data-badge-caption="">Completed</span></a></td>
                    </tr>
<?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>