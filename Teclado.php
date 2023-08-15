<?php
 require_once 'verificalogin.php';
 require_once 'Pagina.php';
   $page = new Pagina();

   $page->head('Teclado');
   $page->SidebarMenu();
?>

<!-- !Conteúdo da página! -->
<div class="w3-main" style="margin-left:350px">

 <!-- Cabeçalho superior -->
<header class="w3-container w3-xlarge">
    <p class="w3-left">Teclado</p>
    <p class="w3-right">
      <i><a href="logout.php">Sair</a></i>
    <!--  <i class="fa fa-search"></i> -->
    </p>
  </header>
  </div>

 <!-- Grade de produto -->
 <div class="w3-row w3-blackscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="teclado/BlackWidow.jpg" style="width:80%">
        <p>Sumido<br><b>$21.00</b></p>
      </div>
     <!-- <div class="w3-container">
        <img src="teclado/MarsRGB.jpg" style="width:80%">
        <p>Sumido<br><b>$22.99</b></p>
      </div> -->
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="teclado/Alloy.jpg" style="width:70%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">
          
          </div>
        </div>
        <p>Alloy<br><b>$100</b></p>
      </div>

      <div class="w3-container">
        <img src="teclado/Prodigy.jpg" style="width:65%">
        <p>Logitech Prodigy<br><b>$105</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="teclado/Warrior.jpeg" style="width:70%">
        <p>Warrior<br><b>$90</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="teclado/blackwidow2.jpeg" style="width:80%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">
          
          </div>
        </div>
        <p>Blackwidow<br><b>$120</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="teclado/Redragon Kumara.jpeg" style="width:70%">
        <p>Redragon Kumara<br><b>$30</b></p>
      </div>
      <div class="w3-container">
        <img src="teclado/MarsRGB.jpg" style="width:80%">
        <p>MarsRGB<br><b>$150</b></p>
      </div>
    </div>
  </div> 
  <!-- Conteúdo da página final -->
</div>


</body>
</html>
