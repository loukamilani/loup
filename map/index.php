<?php
try{
    if(!isset($_COOKIE['user_id'])) {
        header("Location: signup.php");
    }
    
    
}catch(PDOException $e){
    echo ($e->getMessage());
}
    
?>
<!DOCTYPE html>


<html>
    <head>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/main.css" type="text/css" >
    </head>
    <body>
        <h1>le jeu du covid 19</h1>
        <div class="var">
            
                <button class="btn btn-success v" onclick="init()">
                    jouer
                </button>
            
        </div>
        <div class="varrr">
            <a href="./login.php">
                <button class="btn btn-success vvv">
                changer de compte
                </button>
            </a>
        </div>
        <div class="varr">
            <a href="./regle.html">
                <button class="btn btn-success v">
                r&#232;gles
                </button>
            </a>
        </div>
        <script>
            function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}  
           function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
                }
                }
                return "";
                }
           function init(){ 
           game = getCookie("game")
           if(game == 0){
                window.location.href = './map.html'
           }
           if(game == 1){
                window.location.href = './map2.html'
           }
           if(game == 2){
                window.location.href = './map3.html'
           }
           if(game == 3){
                window.location.href = './map4.html'
           }
           if(game == 4){
                window.location.href = './map5.html'
           }
           if(game == 5){
                window.location.href = './map6.html'
           }
           if(game == 6){
                window.location.href = './map7.html'
           }
           if(game == 7){
                window.location.href = './map8.html'
           }
           if(game == 8){
                window.location.href = './map9.html'
           }
           if(game == 9){
                window.location.href = './map10.html'
           }
           if(game == 10){
                window.location.href = './map11.html'
           }
           if(game == 11){
                window.location.href = './map.html'
           }
           }

       </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
        </script>
    </body>
</html>