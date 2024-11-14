<?php
// @definition l'entete ou le titre de la page Contact
$titre = "Me contacter";

// @Inclusion  du header dans la page Contact
require_once 'C:\xampp\htdocs\PortofolioApp\Components\header.php';

// @definition du fonctionnerment "active" lors du pointage du curceur
$nav = "Contact";
?>
<section class="mt-5 container-fluid">
  <style>
    .mt-5 {
      background-color: red;
      margin: auto;
      padding-top: 50px;
      padding-bottom: 50px;
    }
  </style>
  <div>
    <h1>
      Veiller nous contacter via ce formulaire d'inscription pour avoir plus sur nos infos
    </h1>
  </div>
</section>
<section>
  <div class="card container" style="margin:auto;">
    <h2 class="text-center" style="font-size:50px;">Formulaire de Contact</h2>
    <form action="/Pages/Traitement.php" method="post" class="card-body" style="font-size:30px;">
      <div class="row">
        <div class="col mb-3 mt-3">
          <label for="text">Nom :</label>
          <input type="text" class="form-control" id="text" autoloader="off" placeholder="Enter Votre nom et prenom" name="nom" required>
        </div>
        <div class="col mb-3 mt-3">
          <label for="email">Email:</label>
          <input type="email" class="form-control font-size:40px;" id="email" autoloader="off" placeholder="Enter email" name="email" required>
        </div>
      </div>
      <div class="row">
        <div class="col mb-3 mt-3">
          <label for="number">Télephone:</label>
          <input type="number" name="Tel" class="form-control font-size:30px;" id="number" autoloader="off" placeholder="Numero de Télephone" name="Tel">
        </div>

        <div class="col mb-3 mt-3">
          <label for="text">Sujet</label>
          <input type="text" class="form-control" id="text" autoloader="off" placeholder="Enter votre sujet" name="Sujet">
        </div>
      </div>
      <div class="mb-3">
        <label for="comment">Message</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>

<?php require_once 'C:\xampp\htdocs\PortofolioApp\Components\footer.php';  ?>