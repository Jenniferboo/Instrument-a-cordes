<?php

// connexion admin
function connectAdmin (pdo $dbConnect, string $userLogin, string $userPassword): string|bool {

    // sql - récupération via le username uniquement
    $userLogin = $_POST['username'];
    $userPassword= $_POST['password'];


    try{
        $sqlAdmin=$dbConnect -> query("SELECT * FROM user WHERE login='$userLogin'");
    }catch(Exception $e){
        $e = throw new Exception ($e -> getMessage());
    }
    $recup = $sqlAdmin->fetch(PDO::FETCH_ASSOC);

    if(password_verify($userPassword, $recup['password'])){
        $_SESSION['nomDuChamps'];
        // on envoie vraie si la connexion est une réussite
        return true;
    }else{
        $e = throw new Exception( "Login ou mot de passe incorrecte");
    }
        
    }



    function disconnect(){
        # destruction des variables de sessions
        $_SESSION = [];
    
        # suppression du cookie
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
    
        # Destruction du fichier lié sur le serveur
        session_destroy();
    }


