<!--simplexml_load_file — Convertit un fichier XML en objet-->
<?php
$xml = simplexml_load_file("source.xml") or die("Error: Cannot create object");
//La condition if me permet de vérifier qu'il y a la clé 'id' dans le tableau $_GET, 
if (isset($_GET['id'])){
//j'initialise la variabble $page qui récupère l'entier de la valeur 'id' , je précise -1 car un tableau commence a Zero
    $page = intval($_GET['id'])-1;
}else{
//si je n'arrive pas à récupérer les valeurs d'id j'affiche la page accueil (0)
    $page = 0;
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
<!--Dans ce titre, j'affiche le titre se trouvant: : sur la page xml -> dans la balise page , correspondant aux  données de (id="x") se trouvant dans sa balise title-->
  <title><?= $xml->page[$page]->title; ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand"><img src="assets/img/logo.png" width="70" height="83" alt="logo"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">&#9776;</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <?php
//Grace a foreach je parcours le tableau $xml vers <page> = je recupere son contenu qui correspond à $pageContent
        foreach ($xml->page as $pageContent) {
            ?>
<!--J'affiche l'attribut de $pageContent qui correspond aux Id de xml -->            
<a class="nav-item nav-link" href="<?= $pageContent->attributes() ?>.html"><?= $pageContent->menu ?></a>
            <?php
        }
      ?>
  </div>
</nav>
<!--j'affiche le contenu se trouvant: : sur la page xml -> dans la balise page, dans le tableau $page , se trouvant dans sa balise content-->
    <?= $xml->page[$page]->content; ?>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>