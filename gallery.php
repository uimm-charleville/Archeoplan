<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Abel&display=swap" rel="stylesheet">
    <link href="asset/style/gallery.css" rel="stylesheet">
    <title>Galerie</title>
</head>
<body class="font-['Abel']">
    <?php include("asset/include/navbar.php") ?>
<section class="overflow-hidden bg-gradient-to-b from-[#DA9D56] via-[#F5F5F5] to-[#FFFFFF]">
    <div class='my-10'>
        <h1 class='text-4xl md:text-5xl	text-center text-black'>Galerie</h1>
    </div>
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class="-m-1 grid grid-cols-2 gap-2 md:-m-2">
            <div class="flex flex-wrap relative items-center justify-center" id="view_1">
                <div class="w-full md:w-4/5 p-1 md:p-2">
                    <img
                        alt="Fossile"
                        class="block w-full rounded-md object-cover object-center brightness-50"
                        src="asset/img/fossile-1.jpg"
                    />
                </div>
                <div class='absolute'>
                    <p class='font-["ABeeZee"] text-white md:text-2xl'>Fossile</p>
                </div>
            </div>
            <div class="flex flex-wrap relative items-center justify-center" id="view_2">
                <div class="w-full md:w-4/5 p-1 md:p-2">
                    <img
                        id="view_2"
                        alt="Fossile"
                        class="block h-full w-full rounded-md object-cover object-center brightness-50"
                        src="asset/img/fossile-1.jpg"
                    />
                </div>
                <div class='absolute'>
                    <p class='text-white font-["ABeeZee"] md:text-2xl'>Fossile</p>
                </div>
            </div>
            <div class="flex flex-wrap relative items-center justify-center" id="view_3">
                <div class="w-full p-1 md:w-4/5 md:p-2">
                    <img
                        id="view_3"
                        alt="Fossile"
                        class="block h-full w-full rounded-md object-cover object-center brightness-50"
                        src="asset/img/fossile-1.jpg"
                    />
                </div>
                <div class='absolute'>
                    <p class='text-white font-["ABeeZee"] md:text-2xl'>Fossile</p>
                </div>
            </div>
            <div class="flex flex-wrap relative items-center justify-center" id="view_4">
                <div class="w-full p-1 md:w-4/5 md:p-2">
                    <img
                        id="view_4"
                        alt="Fossile"
                        class="block h-full w-full rounded-md object-cover object-center brightness-50"
                        src="asset/img/fossile-1.jpg"
                    />
                </div>
                <div class='absolute'>
                    <p class='text-white font-["ABeeZee"] md:text-2xl'>Fossile</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="myModal" class="modal">
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>
<script src='asset/js/gallery.js'></script>
</body>
</html>