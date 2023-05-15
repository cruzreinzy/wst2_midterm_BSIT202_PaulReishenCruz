<?php

class Chats{
    
    public function send ($message){

        session_start();
        
        $pdo = new PDO('mysql:host=localhost;dbname=chatbase','root','');

        $id = $_SESSION['auth'][0]['id'];
        $message = $_POST['message'];
        
        $query = 'INSERT INTO chats(account_id,message) VALUES(:account_id,:message)';

        $insert = $pdo->prepare($query);

        $insert->bindValue('account_id',$id);
        $insert->bindValue('message',$message);

        $insert->execute();

        echo 'success';
    }


    public function collect(){

        session_start();

        $id = $_SESSION['auth'][0]['id'];

        $pdo = new PDO('mysql:host=localhost;dbname=chatbase','root','');

        $query = 'SELECT accs.id, accs.name, chats.message FROM chats INNER JOIN accs ON chats.account_id = accs.id ORDER BY chats.timestamp ASC';

        $stmt = $pdo->prepare($query);
        
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $html = '';

        foreach($data as $message){
            
            if($id == $message['id']){
                $html.=
                '<div id="messageko">
                    <div class="mymsg bg-secondary bg-opacity-75 rounded-4 col-md-5 p-3 float-end mb-3">
                        <p class="text-body text-opacity-75">Me</p>
                        <p class="text-white">'.$message['message'].'</p>
                        <button class="dltbtn btn btn-danger px-2.5 pt-1 float-end text-white" type="button">Unsend</button>
                        <p class="text-body text-opacity-75">'.$message['name'].'</p>
                    </div>
                </div>';
            }else{
                $html.=
                '<div id="messagenya">
                    <div class="bg-success bg-opacity-75 rounded-4 col-md-5 p-3 mb-3">
                        <p class="text-white">'.$message['name'].'</p>
                        <p class="text-body">'.$message['message'].'</p>
                        <p class="text-white">'.$message['name'].'</p>
                    </div>
                </div>';
            }
            
        }
        echo $html;
    }

}


