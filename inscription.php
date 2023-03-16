<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');
    </style>
</head>
<body>
<div class='bg-gradient-to-b from-[#DA9D56] via-[#F5F5F5] to-[#FFFFFF] flex flex-col items-center font-["Abel"] pt-8'>
        <span class='text-[2.5em]'>Inscription</span>
        <!-- nom des formulaires:   email_insc
                                    nom_insc
                                    prenom_insc
                                    password_insc
                                    password_insc_verif -->
        <form action='asset/php/traitement_inscription.php' method='post' class='w-9/12 mt-12 flex flex-col max-w-[280px]' >
            <!-- listes des erreurs:    unvalid_email
                                        empty_name
                                        empty_firstname
                                        short_pass
                                        unmatching_pass
                                        used_mail
                                            -->
            <label for='email_insc' class='flex flex-col'><span class='flex justify-between items-end '>E-mail
            <?php
                
                if (isset($_GET['error'])){
                    echo "<span class='text-red-500 italic text-[12px]'>";
                    if ($_GET['error']=='unvalid_email'){
                        echo 'Rentrez un email valide';
                    }
                    if ($_GET['error']=='used_email'){
                        echo 'Cette email est déjà utilisée';
                    }
                    echo "</span>";
                }
                ?>
                </span>
                <input type='email' name='email_insc' class='rounded-[5px] border border-[#76470F] border-solid'>    
            </label>
            <label for='nom_conn' class='flex flex-col'>
                <span class='flex justify-between items-end '>Nom
                <?php
                if (isset($_GET['error'])){
                    echo "<span class='text-red-500 italic text-[12px]'>";
                    if ($_GET['error']=='empty_name'){
                        echo 'Nom vide';
                    }
                    echo "</span>";
                }
                ?>
                </span>
                <input type='text' name='nom_insc' class='rounded-[5px] border border-[#76470F] border-solid'>
            </label>
            <label for='prenom_insc' class='flex flex-col'>
                <span class='flex justify-between items-end '>Prénom
                <?php
                if (isset($_GET['error'])){
                    echo "<span class='text-red-500 italic text-[12px]'>";
                    if ($_GET['error']=='empty_firstname'){
                        echo 'Prénom vide';
                    }
                    echo "</span>";
                }
                ?>
                </span>
                <input type='text' name='prenom_insc' class='rounded-[5px] border border-[#76470F] border-solid'>
            </label>
            <label for='password_insc' class='flex flex-col'>
                <span class='flex justify-between items-end '>Mot de passe
                <?php
                if (isset($_GET['error'])){
                    echo "<span class='text-red-500 italic text-[12px]'>";
                    if ($_GET['error']=='short_pass'){
                        echo '8 caractères minimum';
                    }
                    echo "</span>";
                }
                ?>
                </span>
                <input type='password' name='password_insc' class='rounded-[5px] border border-[#76470F] border-solid'>
            </label>
            <label for='password_insc_verif' class='flex flex-col'>
                <span class='flex flex-col'>Vérification du mot de passe
                </span>
                <input type='password' name='password_insc_verif' class='rounded-[5px] border border-[#76470F] border-solid'>
                <?php
                if (isset($_GET['error'])){
                    
                    if ($_GET['error']=='unmatching_pass'){
                        echo "<span class='text-red-500 italic text-[12px] -mb-[18px]'>";
                        echo 'Les mots de passes doivent être identiques';
                        echo "</span>";
                    }
                    
                    
                }
                ?>
            </label>
            <input type='submit' value="S'inscrire" class='bg-[#76470F] px-[40px] py-[2px] mt-10 rounded-[5px] text-[#F7F7F7] inline-block mx-auto'>
        </form>
    </div>
</body>
</html>