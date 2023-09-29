<?php
include_once 'dbConnection.php';
include_once 'users.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if ($_POST) {
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];

    if ($user->create()) {
        echo "User was created successfully.";
    } else {
        echo "Unable to create user.";
    }
}
?>
