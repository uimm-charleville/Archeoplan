<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');
    </style>
</head>
<body>
    <div class='bg-gradient-to-b from-[#DA9D56] via-[#F5F5F5] to-[#FFFFFF] flex flex-col items-center font-["Abel"] pt-14'>
        <span class='text-[2.5em]'>Connexion</span>
        <!-- nom des formulaires:   email_conn
                                    password_conn -->
        <form action='asset/php/traitement_connexion.php' method='post' class='w-9/12 mt-20 flex flex-col max-w-[280px]' >
            <label for='email_conn' class='flex flex-col'><span class='flex justify-between items-end '>E-mail
            <?php
                //erreur si l'email n'est pas rentrée
                if (isset($_GET['error'])){
                    echo "<span class='text-red-500 italic text-[12px]'>";
                    if ($_GET['error']=='no_email'){
                        echo "Veuillez saisir un email";
                    }
                    echo "</span>";
                }
                ?>
                </span>
                <input type='email' name='email_conn' class='rounded-[5px] border border-[#76470F] border-solid'>
                
            </label>
            <label for='password_conn' class='flex flex-col mt-10'>
                <span class='flex justify-between items-end '>Mot de passe<?php
                if (isset($_GET['error'])){
                    echo "<span class='text-red-500 italic text-[12px]'>";
                    if ($_GET['error']=='no_password'){
                        echo "Veuillez rentrer un mot de passe";
                    }
                    if ($_GET['error']=='wrong_pass'){
                        echo "Mot de passe ou email incorrect";
                    }
                    echo "</span>";
                }
                ?>
                </span>
                <input type='password' name='password_conn' class='rounded-[5px] border border-[#76470F] border-solid'>
            </label>
            <span class='text-[10px]'>Mot de passe oublié ?</span>
            <input type='submit' value='Se connecter' class='bg-[#76470F] px-[26px] py-[2px] mt-14 rounded-[5px] text-[#F7F7F7] inline-block mx-auto'>
        </form>
    </div>

</body>
</html>

