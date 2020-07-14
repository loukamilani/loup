<?php
try{
require_once('./Database.php');
$db = new Database();
 
$array = array($_POST['comment'],$_POST['rep'],$_COOKIE['user_id']);

Database::addQuery("INSERT into com (comment,rep,user_id) values (:comment,:rep,:user_id)",$array);

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
        
        <h1>merci pour vos commentaires</h1>
        <div class="varrr">
            <a href="./index.php">
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