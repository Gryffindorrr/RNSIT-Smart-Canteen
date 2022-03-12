<?php

session_start();
try {
    if (!file_exists('../connection-pdo.php'))
        throw new Exception();
    else
        require_once('../connection-pdo.php' );
} catch (Exception $e) {
    $_SESSION['msg'] = 'There were some problem in the Server! Try after some time!';
    header('location: ../../admin/food-list.php');
    exit();
}
if (!isset($_POST['name']) || !isset($_POST['Price'])) {
    $_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';
    header('location: ../../admin/food-list.php');
    exit();
}

$regex = '/^[(A-Z)?(a-z)?(0-9)?\-?\_?\.?\s*]+$/';

if (!preg_match($regex, $_POST['name']) || !preg_match($regex, $_POST['Price'])) {

    $_SESSION['msg'] = 'Whoa! Invalid Inputs!';

    header('location: ../../admin/food-list.php');

    exit();
} else {

    $name = $_POST['name'];
    $Price = $_POST['Price'];
    $category = $_POST['category'];

    $sql = "INSERT INTO food(cat_id,fname,Price) VALUES(?,?,?)";
    $query = $pdoconn->prepare($sql);
    if ($query->execute([$category, $name, $Price])) {

        $_SESSION['msg'] = 'Food Added!';

        header('location: ../../admin/food-list.php');
    } else {

        $_SESSION['msg'] = 'There were some problem in the server! Please try again after some time!';

        header('location: ../../admin/food-list.php');
    }
}