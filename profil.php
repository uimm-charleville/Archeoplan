<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArchéoPlan - Profil</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include("asset/include/navbar.php") ?>

    <div class="bg-gradient-to-b from-[#DA9D56] to-white mb-12 flex flex-col items-center">
        <div class="relative w-full h-[30vh] flex justify-center items-center">
            <img src="asset/img/profil.png" alt="Image de profil" class="w-full h-full object-cover">
            <div class="absolute w-full h-full bg-black/50 top-0"></div>
            <p class="absolute text-white text-5xl font-semibold">Prénom</p>
        </div>

        <div class="px-4 py-4 flex flex-col justify-center items-center space-y-1 w-full">
            <div class="flex flex-row space-x-2 w-full">
                <img src="asset/img/infos.png" alt="Informations">
                <p>Information générales</p>
            </div>
            <div class="w-11/12">
                <p>Nom Prénom</p>
                <p>01/01/2023</p>
            </div>
        </div>

        <div class="w-5/6 h-0.5 bg-[#76470F] rounded"></div>

        <div class="px-4 py-4 flex flex-col justify-center items-center space-y-1 w-full">
            <div class="flex flex-row space-x-2 w-full">
                <img src="asset/img/coordonnees.png" alt="Coordonnées">
                <p>Coordonnées</p>
            </div>
            <div class="w-11/12">
                <p>test@test.fr</p>
                <p>**********</p>
                <p>06.06.06.06.06</p>
            </div>
        </div>

        <div class="pt-5 flex flex-col space-y-2">
            <a href="" class="bg-[#76470F] rounded py-1 px-12 text-white text-center">Modifier</a>
            <a href="" class="bg-white rounded py-1 px-12 text-[#76470F] border border-[#76470F] text-center">Déconnecter</a>
            <a href="" class="bg-red-700 rounded py-1 px-12 text-white text-center">Supprimer</a>
        </div>
    </div>
</body>
</html>