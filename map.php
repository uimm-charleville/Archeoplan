<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ArchéoPlan - Map </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="asset/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include("asset/include/navbar.php") ?>
    <div id="map"></div>
    <dialog id="mapDialog" class="rounded-lg bg-gradient-to-b from-[#DA9D56] to-white w-full">
        <div class="overflow-hidden">
            <!-- dialog -->
            <div>
                <div class="flex justify-between items-center p-1 text-xl">
                    <h6 class="text-xl font-bold">Fossile</h6>
                    <button type="button" id="cancelButton">✖</button>
                </div>
                <div class="p-1 flex flex-row space-x-4">
                    <img src="asset/img/amonite.jpg" alt="amonite" class="rounded-full w-1/4">
                    <div>
                        <p class="text-lg font-semibold">Amonite</p>
                        <p>Charleville-Mézières</p>
                        <p class="text-sm text-slate-500">01/01/2023</p>
                    </div>
                </div>
            </div><!-- /dialog -->
        </div><!-- /overlay -->
    </dialog>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="asset/js/map.js"></script>
</body>

</html>