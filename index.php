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

        <div class="w-full px-4 text-xl">
            <p>Bienvenue <span class="font-semibold text-[#76470F]">Prénom</span>,</p>
        </div>
    </div>
</body>
</html>