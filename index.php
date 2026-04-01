<!DOCTYPE html>
<html lang="efr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
</head>

<body>
    <?php
    include("header.html")
        ?>
    <main class="d-flex flex-column mx-auto mt-5 gap-3">
        <div class="d-flex flex-wrap justify-content-around gap">
            <div>
                <h1 class="titre">Bâtir votre réussite au Lycée Kernanec</h1>
                <p>site officiel de kernanec</p>
            </div>
            <img src="img/batimentface.png" alt="batiment vue de face" class="rond imgacceuil">

        </div>
        <div class="d-flex flex-wrap mx-auto gap-5 bg-light p-3 rounded-5">
            <div class="d-flex flex-wrap">
                <div class="card rounded-5" style="width: 18rem;">
                    <img src="img/fichier.svg" alt="..." class="imgcard">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Inscription</h5>
                        <p class="card-text">Découvrez nos modalités d'inscription pour la prochaine rentrée scolaire
                        </p>

                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="card rounded-5" style="width: 18rem;">
                    <img src="img/calendrier.svg" alt="..." class="imgcard">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Calendrier</h5>
                        <p class="card-text">Consultez les dates importantes de l'année scolaire 2025-2026</p>

                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="card rounded-5" style="width: 18rem;">
                    <img src="img/parent.svg" alt="..." class="imgcard">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Espace parents</h5>
                        <p class="card-text">Accédez aux ressources et informations destinées aux parents d'élèves</p>

                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="card rounded-5" style="width: 18rem;">
                    <img src="img/post.svg" alt="..." class="imgcard ">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card’s content.</p>

                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php
    include("footer.php")
        ?>
</body>

</html>