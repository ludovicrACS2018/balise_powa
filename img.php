<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>IMG - BALISE POWA - Présentation des balises HTML</title>
    </head>
    <body>
        <?php include('header.php'); ?>
        <main class="w1120 center">  
        <?php include('menu.php'); ?><!--
            --><section class="w848 i-block v-top">
                <h2 class="t-left active v-marg"><code>&lt;img&gt;</code></h2>
                    <p class="t-left v-marg">La balise <code class="ft-size-2em">&lt;img&gt;</code> permet de représenter une image dans un document.
                    </p>
                <h3 class="t-left v-marg t-align">Attributs spécifiques</h3>
                <div class="l-attribut">    
                    <ul>
                        <li>src="nomdefichier": emplacement et nom du fichier image (format bmp, jpg, gif).</li>
                        <li>align="top|middle|bottom|left|right": aligner l'image en haut|au milieu|en bas|à gauche|à droite. 
                        </li>
                        <li>width=x: largeur de x pixels.</li>
                        <li>height=y: hauteur de y pixels.</li>
                        <li>border=x: bordure de x pixels.</li>
                        <li>alt="texte": affiche ce texte lorsque l'image n'est pas affichable ou lorsque la souris reste pointée dessus.
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>