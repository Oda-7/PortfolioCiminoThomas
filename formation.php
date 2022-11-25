<?php 
$pageName = 'Formations';
require './layout/header.php'; 
?>

<main class="min-h-min">
    <div class="container grid grid-cols-1 sm:grid-cols-2 mx-auto px-16 lg:px-28 py-20 sm:py-40 items-center">
        <div class="col">
            <h1 class="underline text-3xl font-semibold uppercase sm:pl-11 md:pl-24 lg:pl-44 xl:pl-72 2xl:pl-96 pr-2">Formations</h1>
        </div>
        <div class="col relative">
            <div class="bg-black dark:bg-white absolute -translate-x-1 translate-y-10 min-[444px]:translate-y-6 min-[640px]:translate-y-10 min-[1024px]:translate-y-6 rounded-full w-2 h-2">
            </div>
            <p class="px-4 sm:px-8 translate-y-4 font-semibold text-lg">Graduate Developpeur Web Full Stack</p>
            <div class="border-l border-black dark:border-white px-4 sm:px-8 pt-6 ">
            <p class="pt-2 sm:pt-0">Décembre 2021 - En cours</p>
            <p class="pt-2 sm:pt-0">Distanciel</p>
            <p class="pt-2 sm:pt-0 pb-4 border-b border-black dark:border-white mr-2 lg:mr-20 xl:mr-32">Ecole : Studi </p>
            </div>
            <div class="bg-black dark:bg-white absolute -translate-x-1 translate-y-8 min-[445px]:translate-y-6 rounded-full w-2 h-2">
            </div>
            <p class="px-4 sm:px-8 border-l border-black dark:border-white pt-4 font-semibold text-lg">CAP Menuisier Installateur</p>
            <div class="border-l border-black dark:border-white px-4 sm:px-8 pt-2 ">
            <p class="pt-2 sm:pt-0">2013</p>
            <p class="pt-2 sm:pt-0">Lyon</p>
            <p class="pt-2 sm:pt-0 pb-4 border-b border-black dark:border-white mr-2 lg:mr-20 xl:mr-32">Ecole : Studi </p>
            </div>
        </div>
        
        
    </div>
</main>


<?php require './layout/footer.php'; ?>