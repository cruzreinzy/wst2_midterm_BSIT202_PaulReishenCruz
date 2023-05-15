<?php

class Users{

    public function regist ($name,$usn,$pwd){
    
        $pdo = new PDO('mysql:host=localhost;dbname=chatbase','root','');

        // $username = $_POST['usn'];

        // $query = 'SELECT * FROM accs WHERE username=:username';

        // $check = $pdo->prepare($query);

        // $check->bindValue('username',$username);

        // $check->execute();

        // $records = $check->fetchAll(PDO::FETCH_ASSOC);

        // if(count($records) == 0){

            $name = $_POST['name'];
            $username = $_POST['usn'];
            $pwd = $_POST['pwd'];

            $query = 'INSERT INTO accs(name,username,password) VALUES(:name,:username,:password)';

            $stmt = $pdo->prepare($query);

            $stmt->bindValue('name',$name);
            $stmt->bindValue('username',$username);
            $stmt->bindValue('password',$pwd);
            
            $stmt->execute();

            echo 'success';

        // }else{
        //     echo 'username exist';
        // }

    }


    public function logins ($logusn,$logpwd){

        session_start();
        
        $pdo = new PDO('mysql:host=localhost;dbname=chatbase','root','');

        $username = $_POST['logusn'];
        $password = $_POST['logpwd'];

        $query = 'SELECT * FROM accs WHERE username=:username and password=:password';

        $check = $pdo->prepare($query);

        $check->bindValue('username',$username);
        $check->bindValue('password',$password);

        $check->execute();

        $records = $check->fetchAll();

        if(count($records) == 0){

            echo 'invalid';

        }else{

            $_SESSION['auth'] = $records;
            echo 'success';

        }
    }


}