<?php 
$pageName = 'Projets';
require './layout/header.php'; 
?>

<main class="min-h-screen py-16 dark:text-white grid">
    <div id="carrousel" class="relative mb-16 mx-1 sm:mx-8 md:mx-32 lg:mx-40 xl:mx-64 overflow-hidden min-h-[24rem] xl:h-[500px] border rounded border-black dark:border-white" data-carousel="static">
        <!-- Carousel wrapper -->
        <div id="carrousel_panorama" class="relative h-full rounded-lg min-h-min flex items-center justify-center mx-auto  duration-500">
            <!-- Item 1 -->
            <div id="carrousel-item-1" class="relative h-full grid justify-center duration-700 ease-in-out  mx-auto lg:px-20 xl:px-28 2xl:py-8 2xl:px-40"  data-carousel-item>
                <h2 class="text-2xl font-semibold uppercase my-8 underline mx-4 sm:mx-auto flex justify-center items-center">Langages de programmation</h2>
                <div class="bg-neutral-50 border dark:bg-black border-black dark:border-white p-8 gap-6 mx-16 mb-16 xl:mb-24 flex justify-center rounded flex-wrap">
                    <div class="flex flex-row items-center gap-2">
                        <object data="./image/html.svg" type=""></object> 
                        <p class="text-base font-semibold">HTML</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <object data="./image/CSS.svg" type=""></object> 
                        <p class="text-base font-semibold">CSS</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <object data="./image/php.svg" type=""></object> 
                        <p class="text-base font-semibold">PHP</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <object data="./image/js.svg" type=""></object> 
                        <p class="text-base font-semibold">JavaScript</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <object data="./image/python.svg" type=""></object> 
                        <p class="text-base font-semibold">Python</p> 
                    </div>
                </div> 
            </div>
            <!-- Item 2 -->
            <div id="carrousel-item-2" class="absolute h-full w-full grid justify-center duration-700 ease-in-out rounded mx-auto lg:px-20 xl:px-28 2xl:py-8 2xl:px-40" data-carousel-item>
                <h2 class="text-2xl font-semibold uppercase my-8 underline mx-4 sm:mx-auto flex justify-center items-center">Base de données</h2>
                <div class="bg-neutral-50 dark:bg-black border border-black dark:border-white p-8 gap-6 mx-16 mb-16 xl:mb-24 flex justify-center rounded flex-wrap">
                    <div class="flex flex-row items-center gap-2"> 
                        <object data="./image/mysql.svg" type=""></object>
                        <p class="text-base font-semibold">MySQL</p>
                    </div>
                    <div class="flex flex-row items-center gap-2"> 
                        <object data="./image/mongodb.svg" type=""></object>
                        <p class="text-base font-semibold">MongoDB</p>
                    </div>
                    <div class="flex flex-row items-center gap-2"> 
                        <object class="h-12" data="./image/PostgreSQL.svg" type=""></object>
                        <p class="text-base font-semibold">PostgreSQL</p>
                    </div>
                    <div class="flex flex-row items-center gap-2"> 

                    <svg xmlns="http://www.w3.org/2000/svg" class="dark:fill-white h-8" id="Layer_1" data-name="Layer 1" viewBox="0 0 108.62 35.94" fill="" class=""><defs><style>.cls-1{fill:#018bff;}</style></defs><path d="M20.44,7.54c-5.92,0-9.9,3.41-9.9,10.12v4.09a5.51,5.51,0,0,1,1.93-.45,3.76,3.76,0,0,1,1.94.45V17.66c0-4.32,2.39-6.6,6-6.6s6,2.28,6,6.6V28.12h3.87V17.66c0-6.71-4-10.12-9.89-10.12" transform="translate(-0.19 -0.03)"/><path d="M32.38,18.11c0-6.14,4.43-10.57,10.8-10.57S53.87,12,53.87,18.11v1.37H36.47a6.45,6.45,0,0,0,6.71,5.57c2.62,0,4.44-.79,5.58-2.5H53c-1.59,3.75-5.23,6.14-9.89,6.14-6.26,0-10.69-4.43-10.69-10.58m17.51-2a6.52,6.52,0,0,0-6.71-5,6.39,6.39,0,0,0-6.59,5Z" transform="translate(-0.19 -0.03)"/><path d="M56,18.11C56,12,60.47,7.54,66.84,7.54A10.4,10.4,0,0,1,77.65,18.11c0,6.15-4.44,10.58-10.81,10.58S56,24.26,56,18.11m17.62,0a6.56,6.56,0,0,0-6.93-6.93,6.68,6.68,0,0,0-6.94,6.93,6.57,6.57,0,0,0,6.94,6.94c4.21.12,6.93-2.84,6.93-6.94" transform="translate(-0.19 -0.03)"/><path d="M99.71,32.22h.46c2.5,0,3.41-1.14,3.41-4V8.9h3.87V28c0,5-1.94,7.51-6.94,7.51h-.8Z" transform="translate(-0.19 -0.03)"/><path d="M97.78,30.06H93.91V25.28H84.13a4.82,4.82,0,0,1-4.44-2.5,4.19,4.19,0,0,1,.57-4.55L89,6.74A4.8,4.8,0,0,1,94.48,5a4.75,4.75,0,0,1,3.3,4.55V21.87h2.27v3.41H97.78ZM83.45,20.39a.83.83,0,0,0-.23.57,1,1,0,0,0,1,1h9.67V9.58c0-.68-.45-.91-.68-.91h-.34a1,1,0,0,0-.8.46L83.45,20.39Z" transform="translate(-0.19 -0.03)"/><path class="cls-1" d="M105.51,0a3.3,3.3,0,1,0,3.3,3.3,3.3,3.3,0,0,0-3.3-3.3" transform="translate(-0.19 -0.03)"/><path class="cls-1" d="M12.25,23.23a2.71,2.71,0,0,0-1.94.68L6.67,21.53a2.41,2.41,0,0,0,.12-.91,3.3,3.3,0,1,0-3.3,3.29,2.65,2.65,0,0,0,1.93-.68l3.64,2.5a2.61,2.61,0,0,0-.11.91,2.56,2.56,0,0,0,.11.91L5.42,30.06a3.07,3.07,0,0,0-1.93-.69,3.3,3.3,0,1,0,3.3,3.3,2.38,2.38,0,0,0-.12-.91l3.64-2.5a3.06,3.06,0,0,0,1.94.68,3.29,3.29,0,0,0,3.29-3.3,3.39,3.39,0,0,0-3.29-3.41" transform="translate(-0.19 -0.03)"/></svg>                        
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div id="carrousel-item-3" class="absolute h-full w-full grid justify-center duration-700 ease-in-out rounded mx-auto lg:px-20 xl:px-28 2xl:py-8 2xl:px-40" data-carousel-item>
                
                    <h2 class="text-2xl flex items-center font-semibold uppercase underline mx-auto my-8">Framework Front</h2>
                    <div class="bg-neutral-50 dark:bg-black border border-black dark:border-white p-8 gap-6 mx-16 mb-16 xl:mb-24 flex justify-center rounded flex-wrap">
                        <div class="flex flex-row items-center gap-2">
                            <object data="./image/bootstrap.svg" type=""></object>
                            <p class="text-base font-semibold">Bootstrap</p>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <object data="./image/tailwindcss-icon.svg" type="" ></object> 
                            <p class="text-base font-semibold">Tailwindcss</p>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <object data="./image/materialize.svg" type=""></object> 
                            <p class="text-base font-semibold">Materialize</p>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <object data="./image/bulma.svg" type=""></object>
                            <p class="text-base font-semibold">Bulma</p>
                        </div>
                    </div>       
            </div>
            <!-- Item 4 -->
            <div id="carrousel-item-4" class="absolute h-full w-full grid justify-center duration-700 ease-in-out rounded mx-auto lg:px-16 xl:px-28 2xl:py-8 2xl:px-40" data-carousel-item>
                <h2 class="text-2xl flex items-center font-semibold uppercase underline mx-auto my-8">Framework Back</h2>
                <div class="bg-neutral-50 dark:bg-black border border-black dark:border-white p-8 gap-6 mx-16 mb-16 xl:mb-24 flex justify-center rounded flex-wrap">
                    <div class="flex flex-row items-center gap-2">
                        <!-- <object data="" type=""></object> -->
                        <p class="text-base font-semibold"></p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <!-- <object data="" type="" ></object>  -->
                        <p class="text-base font-semibold"></p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <!-- <object data="" type=""></object>  -->
                        <p class="text-base font-semibold"></p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <!-- <object data="" type=""></object> -->
                        <p class="text-base font-semibold"></p>
                    </div>
                </div>            
            </div>
        </div>
        <!-- Slider indicators -->
        <div id="nav-indicator" class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 pb-2">
            <button id="carrousel-indicator-1" type="button" class="w-3 h-3 rounded-full bg-black dark:bg-white hover:bg-gray-800 dark:hover:bg-gray-400" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button id="carrousel-indicator-2" type="button" class="w-3 h-3 rounded-full bg-black dark:bg-white hover:bg-gray-800 dark:hover:bg-gray-400" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button id="carrousel-indicator-3" type="button" class="w-3 h-3 rounded-full bg-black dark:bg-white hover:bg-gray-800 dark:hover:bg-gray-400" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button id="carrousel-indicator-4" type="button" class="w-3 h-3 rounded-full bg-black dark:bg-white hover:bg-gray-800 dark:hover:bg-gray-400" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        </div>

        <!-- Slider controls -->
        <div id="nav-carrousel">
            <button id="carrousel-prev" type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-2 sm:px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black group-hover:bg-gray-800 dark:bg-white dark:group-hover:bg-gray-400 group-focus:ring-4 group-focus:ring-gray-600 dark:group-focus:ring-gray-400 group-focus:outline-none">
                    <svg aria-hidden="true" class="pointer-events-none w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button id="carrousel-next" type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-2 sm:px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span id="next-span" class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black group-hover:bg-gray-800 dark:bg-white dark:group-hover:bg-gray-400 group-focus:ring-4 group-focus:ring-gray-600 dark:group-focus:ring-gray-400 group-focus:outline-none">
                    <svg id="next-svg" aria-hidden="true" class="pointer-events-none w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span id="next" class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    <!-- Card Stat -->
    <section class="border-b border-t border-black dark:border-white mx-auto xl:px-20 2xl:px-48">
        <div class="grid text-center sm:grid-cols-2 md:grid-cols-4 px-4 py-12 gap-6 lg:h-60">
            <article class="p-2 border border-black dark:border-white rounded-md grid items-center">
                <h1 class="text-base font-semibold uppercase underline">Langages de programmation connu</h1>
                <div id="number-languages" class="py-2 text-lg">5</div>
            </article>
            <article class="p-2 border border-black dark:border-white rounded-md grid items-center ">
                <h1 class="text-base font-semibold uppercase underline">Framework connu</h1>
                <div id="number-framework" class="py-2 text-lg">4</div>
            </article>
            <article class="p-2 border border-black dark:border-white rounded-md grid items-center ">
                <h1 class="text-base font-semibold uppercase underline">Projet personnel</h1>
                <div id="num-projet-perso" class="py-2 text-lg">2</div>
            </article>
            <article class="p-2 border border-black dark:border-white rounded-md grid items-center ">
                <h1 class="text-base font-semibold uppercase underline">Projet en entreprise</h1>
                <div id="num-projet-job" class="py-2 text-lg">0</div>
            </article>
        </div>
    </section>

    <section class="px-2 pt-8 xl:px-10">
        <h1 class="text-2xl font-semibold uppercase text-center">Projets réalisés :</h1>
        <div class="grid justify-center md:grid-cols-3 justify-items-center gap-12 mx-6 pt-8">
            <div class="max-w-xs rounded-md shadow-md dark:shadow-white dark:bg-gray-900 dark:text-gray-100 ">
                <iframe src="https://ecf-salle-de-sport.herokuapp.com/" frameborder="0" class="object-cover object-center w-full rounded-t-md h-72"></iframe>
                <div class="flex flex-col justify-between p-4 space-y-6">
                    <div class="space-y-1">
                        <h2 class="text-3xl font-semibold tracking-wide">Fitness Core</h2>
                        <p class="text-lg uppercase">Langages :</p>
                        <p class="text-sm">HTML / CSS / PHP / MySQL</p>
                        <p class="text-lg uppercase">Framework :</p>
                        <p class="text-sm uppercase">Boostrap</p>
                        <p class="text-lg uppercase">Hébergeur :</p>
                        <p class="text-sm">Heroku</p>
                    </div>
                    <a href="https://ecf-salle-de-sport.herokuapp.com/"><button type="button" class="flex items-center justify-center w-full p-3 font-semibold tracking-wide rounded-md dark:bg-violet-400 dark:text-gray-900">Visiter</button></a>
                </div>
            </div>
            
        </div>
        
    </section>
</main>
<script src="./carrousel.js"></script>
<?php require './layout/footer.php'; ?>