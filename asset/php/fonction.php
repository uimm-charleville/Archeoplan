<?php
function connect_bdd($email,$password,$bdd)
{

    $sql = "SELECT mdp FROM `user` WHERE email=? LIMIT 1";
    $stmt = $bdd ->prepare($sql);
    $stmt -> bindParam(1,$email);
    $stmt->execute();
    $pass_in_bdd= $stmt->fetch();

    //$ pass_in_bdd: mot de passe lié à l'email dans la bdd
    // l'utilisateur est dans la BDD
   
    if (password_verify($password,$pass_in_bdd['mdp']))
    {
        // l'utilisateur a rentré le bon mot de passe et se connecte
        return "connected";
    }
    else    
    {
        // l'utilisateur n'as pas rentré le bon mot de passe
        return "wrong_pass";
    }
}
?>