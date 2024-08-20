<!DOCTYPE html>

<html lang="fr">

<head>
    <!--
    Initie l'encodage du site
    - Initialise bien la page
    - Titre de la page
    - Relie la page html et css
    - Ajoute une icon (sympathique) dans l'onglet (a côté du titre.)
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>GlobeTravel - Acceuil</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./images/home.ico" type="image/x-icon">
</head>


<body>

    <!--
    L'en-tête du site avec un titre et une description
    --->
    <header>
        <h1>GlobeTravel</h1>
        <p>Visiter le monde avec GlobeTravel</p>
    </header>
    <!-- La bar de navigation avec les différent liens du site, l'attribut title est un texte qui s'affiche à côté du pointeur souris lorsqu'on passe sur l'élément -->
    <!-- On passe par une balise nav d'une part pour rendre plus lisible le code, d'autre part car au niveau du css, on avait un problème avec ceci : position : sticky-->
    <!-- la class selected est pour afficher le lien en forme de bouton en bleu (pour dire que c'est sur cette page qu'on est) et navright pour le css avec float (pour les mettre à droite)-->
    <nav>
        <div class="navbar">
            <a href="index.html" title="Acceuil - GlobeTravel" class="selected">Accueil</a>
            <!-- . et / pour naviguer dans la hierachie de façon local et non absolu. -->
            <a href="./pays/France.html" title="La France">France</a>
            <a href="./pays/Senegal.html" title="Le Sénégal">Sénégal</a>
            <a href="./pays/Chine.html" title="La Chine">Chine</a>
            <a href="./pays/EtatsUnis.html" title=">Les Etats-Unis">Etats-unis</a>
            <a href="./pays/Australie.html" title="L'Australie">Australie</a>
            <a href="./avis.html" title="Votre avis" class="navright">Avis</a>
            <a href="./coordonnees.html" title="Nos coordonées" class="navright">Coordonées</a>
        </div>
    </nav>
</body>

    <!-- Le pied de page. -->
    <footer>
        <!-- On réutilise la même technique que précédement pour centrer et mettre à gauche et à droite. -->
        <div class="boxnobg"> 
            <div class="left">
                <h3>GlobeTravel</h3>
            </div>
            <div class="right">
                <p>Site créer par GUEYE serigne fallilou et LOUYOT Thibaut</p>
            </div>
        </div>
        <hr>
        <p class="boxnobg">Votre avis compte pour nous. Aidez nous à améliorer nos services en donnant votre avis.</p>
        <a href="./avis.html" class="liens" title="Votre avis">Votre avis</a>
        <a href="./coordonnees.html" class="liens" title="Nos coordonées">Nos coordonées</a>
    </footer>

</body>

</html>