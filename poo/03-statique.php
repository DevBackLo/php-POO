<!doctype html>
<html lang="fr">

<head>
    <title>Les propriétées et les méthodes statiques - cours programmation orientée objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="p-3 bg-light">
        <div class="container text-center">
            <h1 class="display-4">POO: la Programmation Orientée Objet</h1>
            <p class="lead text-center mt-3">Les propriétées et les méthodes statiques </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <h2 class="text-center">Introduction</h2>
                <p>Les propriétés des méthodes statiques sont particulières, en effet ses dernières n'ont pas besoins d'être appliqués sur l'instantiation de notre classe, elles vont y être directemment liées. Dès que l'ont aura un nouvel object, il profitera de la méthode, mais la nomenclature sera différente.</p>

                <h4 class="text-secondary text-center">Dans quel cas l'utiliser ?</h4>
                <p>Définition Instancier c'est faire un nouvell objet, une class est on fait un <code>new=</code></p>

                <p>Les méthodes et propriétés statiques sont pratiques dans ces certains cas uniquement. Premièrement lorsque l'on veut qu'une méthode soient appliqué à notre classe ,comme lors du formatage d'un nombre <br>
                exemple: Lorsque l'on rajoute un zero initial quand le chiffre est inferieur a 10.
                <code>$machin->format()</code> car ce code est trop lourd et il existe plus simple.
                On cherche enft à ce que dès que l'instanciatiation est faite, le format sois automatiquement appelé.</p>
               
                <p>La façon d'instancier une classe qui possède une méthode statique sera,différente : <code>class:: methode()</code>. On l'utilisera alors pour appelé la méthode deux fois deux point <em>et non plus la flèche</em></p>
               
            </div><!-- fin de la classe "col-12: Introduction" -->

            
        </div><!-- fin de la rangée -->
    </div><!-- fin du "container" -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>