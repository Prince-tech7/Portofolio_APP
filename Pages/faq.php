<?php
// @definition l'entete ou le titre de la page Conseils
$titre = "Foire aux Questions";

// @Inclusion  du header dans la page Conseils
require_once 'C:\xampp\htdocs\PortofolioApp\Components\header.php';

// @definition du fonctionnerment "active" lors du pointage du curceur
$nav = "Conseils";

?>
<div class="row">
  <div class="card col-sm-4 " style="margin:40px 40px; width:380px;">
    <div class="card-body">
      <h4 class="card-title">Combien coute vos services en Design ?</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Voir Plus</a>
    </div>
  </div>
  <div class="card col-sm-4 " style="margin:40px 40px; width:380px;">
    <div class="card-body">
      <h4 class="card-title">Combien coute vos services en Design ?</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Voir Plus</a>
    </div>
  </div>
  <div class="card col-sm-4" style="margin:40px 40px; width:380px;">
    <div class="card-body">
      <h4 class="card-title">Comment pourais-je mettre </h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Voir Plus</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="card col-sm-4" style="margin:40px 40px; width:380px;">
    <div class="card-body">
      <h4 class="card-title">Combien coute vos séances de Coaching?</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Voir Plus</a>
    </div>
  </div>
  <div class="card col-sm-4" style="margin:40px 40px; width:380px;">
    <div class="card-body">
      <h4 class="card-title">Consultant Business</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Voir Plus</a>
    </div>
  </div>
  <div class="card col-sm-4" style="margin:40px 40px; width:380px;">
    <div class="card-body">
      <h4 class="card-title">Consultant Business</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Voir Plus</a>
    </div>
  </div>
</div>


<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">

      <div class="card col-sm-4" style="margin:40px 40px; width:380px;">
        <div class="card-body">
          <h4 class="card-title">Consultant Business</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          <a href="#" class="btn btn-primary">Voir Plus</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">

    <div class="card col-sm-4" style="margin:40px 40px; width:380px;">
      <div class="card-body">
        <h4 class="card-title">Consultant Business</h4>
        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
        <a href="#" class="btn btn-primary">Voir Plus</a>
      </div>
    </div>
  </div>

</div>
<div class="carousel-item">

  <div class="card col-sm-4" style="margin:40px 40px; width:380px;">
    <div class="card-body">
      <h4 class="card-title">Consultant Business</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Voir Plus</a>
    </div>
  </div>
</div>

</div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div