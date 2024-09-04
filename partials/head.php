<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases en PHP - <?php echo $myPage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav class="navbar navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">
                <img src="/public/img/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top">
                Les bases en PHP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php 
                    if($myPage !== 'accueil'){
                        echo '<a class="nav-link text-light" href="/">Accueil</a>';
                    }
                    if($myPage !== 'base'){
                        echo '<a class="nav-link text-light" href="/bases.php">Les bases</a>';
                    }
                    if($myPage !== 'variable'){
                        echo '<a class="nav-link text-light" href="/variable.php">Les variables</a>';
                    }
                    if($myPage !== 'constante'){
                        echo '<a class="nav-link text-light" href="/constante.php">Les constantes</a>';
                    }
                    if($myPage !== 'arithmetique'){
                        echo '<a class="nav-link text-light" href="/arithmetique.php">L\'arithmetique</a>';
                    }
                    if($myPage !== 'condition'){
                        echo '<a class="nav-link text-light" href="/condition.php">Les conditions</a>';
                    }
                    if($myPage !== 'tableau'){
                        echo '<a class="nav-link text-light" href="/tableau.php">Les tableaux</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>