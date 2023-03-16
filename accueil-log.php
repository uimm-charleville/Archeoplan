<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include("asset/include/navbar.php") ?>

    <div class="bg-gradient-to-b from-[#DA9D56] to-white mb-12 flex flex-col items-center w-full">
        <?php if (isset($_GET['success'])) { ?>
            <p class="bg-green-100 text-green-700 py-1 px-3 w-full text-center">Votre photo a bien été soumise</p>
        <?php } ?>
        <div class="py-10 flex flex-row space-x-2 items-center">
            <img src="asset/img/logo.png" alt="">
            <h1 class="text-3xl font-semibold">ArchéoPlan</h1>
        </div>
        <div class="mb-20">
            <h2 class="text-xl font-semibold">L’Archéologie à votre portée</h2>
        </div>

        <div class="pt-5 flex flex-col space-y-5">
            <a href="inscription.php" class="bg-[#76470F] rounded py-1 px-12 text-white text-center">Inscription</a>
            <a href="connexion.php" class="bg-white rounded py-1 px-12 text-[#76470F] border border-[#76470F] text-center">Connection</a>
        </div>
    </div>
</body>
</html>