<?php
function nav_item(string $lien, string $titre):string {

  $classe="nav-item";
  if ($_SERVER['SCRIPT_NAME'] == $lien) {
    $classe .= 'active';

  }
  return <<<HTML
      <li class="$classe"> 
        <a class="nav-link" href="$lien">$titre</a>
      </li>
HTML;

}



?>

<!-- cette section du header englobe que l'entete -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- @LA Technologie des titres c'est à dire comment les titre fonctionnent en harmonies -->
    <title> <?php if (isset($titre)) { echo $titre; } else {header('Location:404.php');} ?> </title>

    <link rel="stylesheet" href="/Vendor/bootstrap-5.3.3/css/bootstrap.min.css">
</head>
<body>

<!-- @setion menu réutilisable  -->
<section class="nav-tabs bg-dark">

 <!--L'arrière plan en noir avec du text en blanc -->
<nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top ">
  <div class="container-fluid" >
    <!-- @cette partie est dédié aux pages  -->
    <ul class="navbar-nav ">
      <!-- @Partie dedié à la page D'acceuil avec le mecanisme du bouton active -->
      <?= nav_item('/Pages/Index.php', 'Acceuil')?>
      <?= nav_item('/Pages/Competences.php', 'Mes compétences')?>
      <?= nav_item('/Pages/faq.php', 'FAQ')?>
      <?= nav_item('/Pages/Contact.php', 'Me Contacter')?>
      <?= nav_item('/Pages/Temoignages.php', 'Témoignages')?>
    </ul>
  </div>
</nav>

</section>
<style>
   
</style>
<section class="container-fluid">
 <img src="Assets/Img/imgb2.jpg" alt="">
</section>



<!-- L'hebergeur gratuit 000 web host -->