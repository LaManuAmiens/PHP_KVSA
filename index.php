<?php
$xml = simplexml_load_file("source.xml") or die("Error: Cannot create object");
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>OCORDO KVSA</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
  <a class="nav-item nav-link" href="#">OCORDO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <?php
//Grace a foreach je parcours le tableau $xml vers <page> = je recupere son contenu
        foreach ($xml->page as $pageContent) {
            ?>
<!--J'affiche <menu> de chaque page dans ma Navbar-->            
<a class="nav-item nav-link" href="?id=<?= $pageContent->attributes() ?>.html"><?= $pageContent->menu ?></a>
            <?php
        }
      ?>
  </div>
  </div>
</nav>

<!--Grace a foreach je parcours  le tableau $xml vers l'index 0 (= 1 dans le tableau) vers <content> = je recupere son contenu
$xml-> page-> content EST LA DIRECTION QUE MA BOUCLE DOIT SUIVRE
Je fais apparaitre sur ma page index.php $value (contenu de <content>)-->
    <?php echo $xml->page[intval($_GET['id'])-1]->content; ?>


    
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>