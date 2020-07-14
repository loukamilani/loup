<?php

try{
    require_once('./Database.php');
    $db = new Database();
    $array = array($_POST['username'],md5($_POST["password"]));
    $data = Database::query("SELECT id FROM user where username=:username and password=:password ",$array);
    if(count($data) == 1){
        echo "good login";
        echo $d[1];
        session_start();
        foreach ($data as $d) {
            setcookie("user_id", $d['id'], time() + 3600 * 24 * 30);
            header("Location: index.php");
            
        }   
    }else{
        echo "sorry";
    }
    
    
    
    
   }catch(PDOException $e){
       echo ($e->getMessage());
   }

?>