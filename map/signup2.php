<?php

try{
    require_once('./Database.php');
    $db = new Database();
    $array = array($_POST['username']);
    $data = Database::query("SELECT id FROM user where username=:username",$array);
    if($_POST['username'] == "" || $_POST["password"] == ""){
        echo "désolé";
    }else{
    if(count($data) == 1){
       echo "désolé ce nom d'utulisateur est pris par un autre compte";

          
    }else{
        $array = array($_POST['username'],md5($_POST["password"]),$_POST["email"]);
        Database::addQuery("insert into user (username,password,email) values (:username,:password,:email)",$array);
        
        
        $array = array($_POST['username'],md5($_POST["password"]));
        $data = Database::query("SELECT id FROM user where username=:username and password=:password ",$array);
        if(count($data) == 1){
            session_start();
            foreach ($data as $d) {
                
                setcookie("user_id", $d['id'], time() + 3600 * 24 * 30);
                header("Location: index.php");
            
            }   
        }else{
            echo "désolé";
        }
    }
}
    
    
    
    
   }catch(PDOException $e){
       echo ($e->getMessage());
   }

?>
<html>
    <head>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/main.css" type="text/css" >
    </head>
    <body>
        
        <div class="varrr">
            <a href="./signup.php">
                <button class="btn btn-success vv">
                    continuer
                </button>
            </a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
        </script>
    </body>
</html>