<?php
include "header_toko.php";
?>
<br> <h2 align="center">Selamat Datang <?=$_SESSION['nama_petugas']?> di Website Toko Online.</h2> <br>
<style>
    img{
        width: 400px;
        height: 800px;
    }
</style>    
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
      <img src="https://i.pinimg.com/564x/39/e0/89/39e0890f6767beedd724d086da00cea5.jpg" alt="Clothes" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/564x/40/0d/a0/400da06bd8a0d7f43c2982764bd49fe5.jpg" alt="Shoes" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/564x/db/0f/8d/db0f8dfcb906f43a9f08f178b80e4d75.jpg" alt="Veil" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


