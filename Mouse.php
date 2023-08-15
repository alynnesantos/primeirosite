<?php
 require_once 'verificalogin.php';
 require_once 'Pagina.php';
   $page = new Pagina();

   $page->head('Mouse');
   $page->SidebarMenu();
?>

<!-- !Conteúdo da página! -->
<div class="w3-main" style="margin-left:250px">

 <!-- Cabeçalho superior -->
<header class="w3-container w3-xlarge">
    <p class="w3-left">Mouse</p>
    <p class="w3-right">
      <i><a href="logout.php">Sair</a></i>
      <!--<i class="fa fa-search"></i>-->
    </p>
  </header>
  </div>

 <!-- Grade de produto -->
 <div class="w3-row w3-blackscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
       <!-- <img src="img/Grindor.jpg" style="width:100%">
        <p>Grindor<br><b>$21.00</b></p>-->
      </div>
      <div class="w3-container">
        <!-- <img src="img/Cobra Lunar White.jpg" style="width:70%"> 
        <p>Mouse Cobra Lunar White<br><b>$22.99</b></p>-->
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="mouse/Cobra Lunar White.jpg" style="width:70%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">
          
          </div>
        </div>
        <p>Mouse Cobra Lunar White<br><b>$100</b></p>
      </div>
      <div class="w3-container">
        <img src="mouse/Pegasus.jpg" style="width:70%">
        <p>Mouse Pegasus<br><b>$105</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="mouse/razer.jpg" style="width:70%">
        <p>Mouse Razer<br><b>$90</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="mouse/Logitech.jpg" style="width:60%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">
          
          </div>
        </div>
        <p>Mouse Logitech<br><b>$120</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="mouse/GT.jpg" style="width:70%">
        <p>Mouse GT<br><b>$30</b></p>
      </div>
      <div class="w3-container">
        <img src="mouse/HP Gaming M220.jpg" style="width:70%">
        <p>Mouse HP Gaming M220<br><b>$150</b></p>
      </div>
    </div>
  </div> 
  <!-- Conteúdo da página final -->
</div>



</body>
</html>
