<?php
include "../Controllers/UserController.php";
include "../Models/UserModel.php";

// form submit
$user = new UserController();
$user->register('Jimmy', 'Songa');

print_r($user->user_id . "<br><br>");

$user = User::getInstance($user->user_id);

print_r($user->getFullName());