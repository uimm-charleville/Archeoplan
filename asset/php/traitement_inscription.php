<?php
session_start();
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
require_once('fonction.php');
if (!filter_var($_POST['email_insc'],FILTER_VALIDATE_EMAIL)){
    header("location:../../inscription.php?error=unvalid_email");
}
if ($_POST['nom_insc']==''){
    header("location:../../inscription.php?error=empty_name");
}
if ($_POST['prenom_insc']==''){
    header("location:../../inscription.php?error=empty_firstname");
}
if (strlen($_POST['password_insc'])<8){
    header("location:../../inscription.php?error=short_pass");
}
if ($_POST['password_insc']!=$_POST['password_insc_verif']){
    header("location:../../inscription.php?error=unmatching_pass");
}

$sql = 'SELECT email FROM user WHERE email=?';
$stmt = $pdo ->prepare($sql);
$stmt -> bindParam(1,$_POST['email_insc']);
$not_in_bdd=$stmt->execute();
if ($not_in_bdd)
{
    $sql='INSERT INTO user(email,nom,prenom,mdp) VALUES (?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    $password=password_hash($_POST['password_insc'],PASSWORD_DEFAULT);
    $stmt->bindParam(1,$_POST['email_insc']);
    $stmt->bindParam(2,$_POST['nom_insc']);
    $stmt->bindParam(3,$_POST['prenom_insc']);
    $stmt->bindParam(4,$password);
    $stmt -> execute();
    $_SESSION['connected']=TRUE;
    $_SESSION['email']=$_POST['email_insc'];
    $_SESSION['nom']=$_POST['prenom_insc'];
    $_SESSION['prenom']=$_POST['prenom_insc'];
    header('../../index.php');
}
else{
    header("location:../../inscription.php?error=used_email");
}

?>
<!-- nom des formulaires:   email_insc
                            nom_insc
                            prenom_insc
                            password_insc
                            password_insc_verif -->
<!-- listes des erreurs:    unvalid_email
                            empty_name
                            empty_firstname
                            short_pass
                            unmatching_pass
                            used_email
                                -->