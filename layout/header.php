<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio - <?= $pageName ?></title>
    <link  href="./dist/output.css" rel="stylesheet">
</head>

<body class="bg-white dark:bg-black dark:text-white text font-['Audiowide'] min-h-screen">
<header class="border-b border-gray-500 dark:border-white rounded-b-3xl shadow-sm shadow-black dark:shadow-white">
    <nav class="container mx-auto md:px-16">
        <div class=" flex flex-wrap justify-between items-center lg:py-2 p-4 mx-auto">
            <div class="flex items-center ">
                <div class="min-w-[64px]">
                    <img src="image/photocarre.jpg" class="h-16 rounded-full p-2" alt="photo_id">
                </div>
                <div class="ml-2 text-base font-semibold uppercase mr-4">
                    <h3 class=""><a class="hover:text-gray-400" href="./">CIMINO Thomas</a></h3>
                    <h3 class="">Développeur Web Full Stack</h3>
                </div>
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-black dark:focus:ring-white rounded-lg text-sm p-4">
                    <object id="theme-toggle-dark-icon" class="pointer-events-none hidden w-5 h-5" data="./image/dark.svg"></object>
                    <object id="theme-toggle-light-icon" class="pointer-events-none hidden w-5 h-5" data="./image/light.svg"></object>
                </button>
            </div>
            
            <button id="burger" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-4 ml-3 text-sm text-black rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-white" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full lg:block lg:w-auto text-base font-semibold uppercase focus:underline" id="menuMobile">
                <ul class="flex flex-col lg:flex-row p-2 mt-2">
                    <li>
                        <a type="button" class="block ml-4 my-2 hover:text-gray-400 focus:underline" href="./">Accueil</a>
                    </li>
                    <li>
                        <a type="button" class="block ml-4 my-2 hover:text-gray-400 focus:underline" href="./experience.php">Expériences</a>
                    </li>
                    <li>
                        <a type="button" class="block ml-4 my-2 hover:text-gray-400 focus:underline" href="./formation.php">Formations</a>
                    </li>
                    <li>
                        <a type="button" class="block ml-4 my-2 hover:text-gray-400 focus:underline" href="./projet.php">Projets</a>
                    </li>
                    <li aria-labelledby="dropdownNavbarLink">
                        <button type="button" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 ml-4 my-2 text-black dark:text-white hover:text-gray-400 md:p-0 md:w-auto ">CV<svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                        <div id="drowpdown" class="position absolute z-40 hidden flex-col h-96 w-64 sm:w-96 font-normal bg-white dark:bg-black rounded shadow shadow-black dark:shadow-white lg:-translate-x-40">
                            <object class="h-full" data="./image/CV-ThomasCimino-11-2022.pdf" type="application/pdf"></object>
                        </div>
                    </li>
                    <li>
                        <a type="button" class="block ml-4 my-2 hover:text-gray-400 focus:underline"  href="mailto:toma.cimino@hotmail.fr">Me contacter</a>
                    </li>
                </ul>
            </div>
        </div> 
    </nav>
</header>