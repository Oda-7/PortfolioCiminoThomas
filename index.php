<?php 
$pageName = 'Accueil';
require './layout/header.php'; 
?>

<main class="md:mx-auto md:p-auto lg:px-28 grid md:grid-cols-2 items-center min-h-min pt-10 pb-10">
    <div class="lg:col p-4 md:pl-12 lg:pl-20">
        <p class="text-3xl">Bienvenue, je suis <u>Thomas CIMINO</u>,<br></p>
        <p class="pt-4 text-lg">Je suis apprenti Développeur Web Full Stack et j'habite Hauterives (26).
            Grand passionné d'informatique, je me suis lancé dans la formation de Développeur Web Full Stack.
            La grande variété de langages étudiés, l'organisation que demande cette formation 
            au quotidien, et l'utilité que cela pourra avoir dans les métiers informatiques, ne 
            font que conforter mon choix de reconversion professionnelle dans ce domaine.
        </p> 
    </div> 
    <div class="lg:col px-2 md:px-0 md:pr-12 lg:pr-20">
        <img src="image/photocarre.jpg" alt="photo_id" class="w-full rounded-full"> 
    </div>
</main>

<?php require './layout/footer.php'; ?>