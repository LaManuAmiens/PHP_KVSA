<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>ocordo</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?id=2.html">Qui sommes-nous ?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?id=3.html">Commentaires client</a>
        </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?id=4.html">Contacts</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
if($_GET['id'] == '2.html'){
  $xml1 = simplexml_load_file('source.xml') or die('Erreur : impossible de créer l\'objet');
  echo $xml1->page[1]->menu;
  echo $xml1->page[1]->title;
  echo $xml1->page[1]->content;
}
else if($_GET['id'] == '3.html'){
  $xml1 = simplexml_load_file('source.xml') or die('Erreur : impossible de créer l\'objet');
  echo $xml1->page[2]->menu;
  echo $xml1->page[2]->title;
  echo $xml1->page[2]->content;
}else if($_GET['id'] == '4.html'){
  $xml1 = simplexml_load_file('source.xml') or die('Erreur : impossible de créer l\'objet');
  echo $xml1->page[3]->menu;
  echo $xml1->page[3]->title;
  echo $xml1->page[3]->content;
}else{
  $xml1 = simplexml_load_file('source.xml') or die('Erreur : impossible de créer l\'objet');
  echo $xml1->page[0]->menu;
  echo $xml1->page[0]->title;
  echo $xml1->page[0]->content;
}
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>