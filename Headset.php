<?php
 require_once 'verificalogin.php';
 require_once 'Pagina.php';
   $page = new Pagina();

   $page->head('Headset');
   $page->SidebarMenu();
?>

<!-- !Conteúdo da página! -->
<div class="w3-main" style="margin-left:250px">

 <!-- Cabeçalho superior -->
<header class="w3-container w3-xlarge">
    <p class="w3-left">Headset</p>
    <p class="w3-right">
      <i><a href="logout.php">Sair</a></i>
     <!-- <i class="fa fa-search"></i> -->
    </p>
  </header>
  </div>

 <!-- Grade de produto -->
 <div class="w3-row w3-blackscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
      </div>
      <div class="w3-container">
      </div> 
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="headset/Logitech.jpeg" style="width:90%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">

          </div>
        </div>
        <p>Logitech<br><b>$100</b></p>
      </div>
      <div class="w3-container">
        <img src="headset/Razer Kraken.jpeg" style="width:82%">
        <p>Kraken<br><b>$105</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="headset/Warrior.jpg" style="width:90%">
        <p>Warrior<br><b>$90</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="headset/fortrek.jpg" style="width:90%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">
          
          </div>
        </div>
        <p>Fortrek<br><b>$30</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="headset/HyperX.jpeg" style="width:90%">
        <p>HyperX<br><b>$30</b></p>
      </div>
      <div class="w3-container">
        <img src="headset/Redragon.jpeg" style="width:85%">
        <p>Redragon<br><b>$150</b></p>
      </div>
    </div>
  </div> 
  <!-- Conteúdo da página final -->
</div>



</body>
</html>
