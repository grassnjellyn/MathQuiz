<?php

session_start();

require_once 'entity/Role.php';
require_once 'entity/User.php';
require_once 'dao/RoleDaoImpl.php';
require_once 'dao/UserDaoImpl.php';
require_once 'controller/UserController.php';
require_once 'util/ConnectionUtil.php';

if (!isset($_SESSION['web_is_logged'])) {
    $_SESSION['web_is_logged'] = false;
}

// Fetch data Role
$roleDao = new RoleDaoImpl();
$roles = $roleDao->fetchAllRole();

echo "Data Role:<br>";
foreach ($roles as $role) {
    echo "ID Role: {$role->getIdRole()}, Nama Role: {$role->getNamaRole()}<br>";
}

// Fetch data User
$userDao = new UserDaoImpl();
$users = $userDao->fetchAllUser();

echo "<br>Data User:<br>";
foreach ($users as $user) {
    echo "ID User: {$user->getIdUser()}, Username: {$user->getUsername()}, Password: {$user->getPassword()}, Email: {$user->getEmail()}<br>";
    echo "Role ID: {$user->getRole()->getIdRole()}, Role Nama: {$user->getRole()->getNamaRole()}<br>";
}
