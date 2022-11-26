<?php 
$pageName = 'Expériences';
require './layout/header.php'; 
?>

<main class="min-h-min">
    <div class="container grid grid-cols-1 sm:grid-cols-2 mx-auto px-16 lg:px-28 py-20 sm:py-44 items-center">
        <div class="col">
            <h1 class="underline text-3xl font-semibold uppercase  md:pl-16 lg:pl-36 xl:pl-72 2xl:pl-[400px] pr-2">Expériences</h1>
        </div>
        <div class="col relative ">
            <div class="bg-black dark:bg-white absolute -translate-x-1 translate-y-14 min-[382px]:translate-y-7 min-[640px]:translate-y-12 min-[768px]:translate-y-7 rounded-full w-2 h-2">
            </div>
            <p class="px-4 sm:px-8 translate-y-5 text-lg">Décembre 2022 - Janvier 2023</p>
            <div class="border-l border-black dark:border-white px-4 sm:px-8 pt-7 ">
            <p class="pt-2 sm:pt-0">Programmation Informatique </p>
            <p class="pt-2 sm:pt-0 pb-4 border-b border-black dark:border-white mr-2 lg:mr-20 xl:mr-32">Stage</p>
            </div>
        </div>
    </div>
</main>


<?php require './layout/footer.php'; ?>