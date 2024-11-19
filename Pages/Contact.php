<?php
// @definition l'entete ou le titre de la page Contact
$titre = "Me contacter";

// @Inclusion  du header dans la page Contact
require_once 'C:\xampp\htdocs\PortofolioApp\Components\header.php';

// @definition du fonctionnerment "active" lors du pointage du curceur
$nav = "Contact";
?><br>

<section class=" container-fluid row mt-3" style="margin: auto;" >
<section class="col-sm-5 d-inline-block mx-5" >
<div class="card"  >
  <style>
    .card-img-top{
      width: 400px;
      height: 570px;
      background-image: url('/Assets/Img/imgb4.jpg');
    }
  </style>
  <img class="card-img-top"  src="" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Devellopement des sites internets</h4>
    <p class="card-text">Pour tous vos bésoins dan sla conception des sites
       internet veiller s'il vous plait nous contacter  </p>
    <a href="#" class="btn btn-primary">Voir Mon CV</a>
  </div>
</div>
</section>
<section class="col-sm-5 bg-info mx-5">
  <div class="card container bg-info" style="margin:auto;">
    <h2 class="text-center" style="font-size:30px;">LAISSEZ MOI UN MESSAGE</h2>
    <form action="/Pages/Database.php" method="post" class="card-body" style="font-size:15px;">
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
      <button type="submit" name="submit" class="btn btn-warning">Submit</button>
    </form>
  </div>
  <div class="text-center">
      <p class="text-center">Réjoignez moi via</p>
     <a href="https://wa.me/242067179811" style="font-size:35px; color:green;"><i class="fa-brands fa-whatsapp mx-2"></i></a> 
      <a href="https://t.me/Guyblanc" style="font-size:35px; color:bleu;"><i class="fa-brands fa-telegram mx-2"></i></a>
  </div>
</section>
</section>

<?php require_once 'C:\xampp\htdocs\PortofolioApp\Components\footer.php';  ?>