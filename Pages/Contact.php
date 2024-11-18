<?php
// @definition l'entete ou le titre de la page Contact
$titre = "Me contacter";

// @Inclusion  du header dans la page Contact
require_once 'C:\xampp\htdocs\PortofolioApp\Components\header.php';

// @definition du fonctionnerment "active" lors du pointage du curceur
$nav = "Contact";
?>

<section class="row" >
<section class="col-sm-5 d-inline-block"  >
<div class="card"  >
  <img class="card-img-top"  src="\Assets\Img\Prince.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">ITOUA Guy Blanc Prince</h4>
    <p class="card-text">Developpeur web fullstack junior</p>
    <a href="#" class="btn btn-primary">Voir Mon CV</a>
  </div>
</div>
</section>
<section class="col-sm-5">
  <div class="card container" style="margin:auto;">
    <h2 class="text-center" style="font-size:50px;">Formulaire de Contact</h2>
    <form action="/Pages/Database.php" method="post" class="card-body" style="font-size:30px;">
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
          <input type="number" name="telephone" pattern="^[0-14]{15}$" class="form-control font-size:30px;" id="number" autoloader="off" placeholder="Numero de Télephone">
        </div>

        <div class="col mb-3 mt-3">
          <label for="text">Sujet</label>
          <input type="text"  name="sujet" class="form-control" id="text" autoloader="off" placeholder="Enter votre sujet">
        </div>
      </div>
      <div class="mb-3">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="5" id="message" ></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>
</section>

<?php require_once 'C:\xampp\htdocs\PortofolioApp\Components\footer.php';  ?>