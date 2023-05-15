<?php

require_once('assets/classes/class.users.php');
require_once('assets/classes/class.chats.php');

if($_GET['ref'] == 'regist'){
    $users = new Users;
    $users->regist($_POST['name'], $_POST['usn'], $_POST['pwd']);
}

if($_GET['ref'] == 'logins'){
    $users = new Users;
    $users->logins($_POST['logusn'], $_POST['logpwd']);
}

if($_GET['ref'] == 'send'){
    $chats = new Chats;
    $chats->send($_POST['message']);
}

if($_GET['ref'] == 'collect'){
    $chats = new Chats;
    ($chats->collect());
}

// if($_GET['ref'] == 'delete'){
//     $chats = new Chats;
//     $chats->delete($_POST);
// }