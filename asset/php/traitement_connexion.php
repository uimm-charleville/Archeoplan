<?php
session_start();
require_once('fonction.php');

$host = '127.0.0.1';
$db   = 'test';
$user = 'root';
$pass = '';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
    $pdo = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_POST['email_conn']==''){
    header('location: ../../connexion.php?error=no_email');
}
if ($_POST['password_conn']==''){
    header('location: ../../connexion.php?error=no_password');
}

$conn=connect_bdd($_POST['email_conn'],$_POST['password_conn'],$pdo); 

//on vérifie les messages d'erreur
if ($conn!="connected"){
    if ($conn=='wrong_pass'){
        header('location:../../connexion.php?error=wrong_pass');
    }
}
else{
    $_SESSION['connected']=TRUE;
    header('location: ../../index.php');
}


?>
<!-- nom des formulaires:   email_conn
                            password_conn -->