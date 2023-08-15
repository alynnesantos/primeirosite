<?php
    require_once 'verificalogin.php';
    require_once 'Pagina.php';
    $page = new Pagina();

    $page->head('Gabinetes');
    $page->SidebarMenu();
?>

<!-- !Conteúdo da página! -->
<div class="w3-main" style="margin-left:250px">

 <!-- Cabeçalho superior -->
<header class="w3-container w3-xlarge">
    <p class="w3-left">Gabinetes</p>
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
        <!--<img src="img/Grindor.jpg" style="width:70%">
        <p>Grindor<br><b>$21.00</b></p>
      </div>
      <div class="w3-container">
        <img src="img/Grindor.jpg" style="width:70%">
        <p>Gabinete Grindor<br><b>$22.99</b></p> -->
      </div>
    </div> 

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/Grindor.jpg" style="width:70%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">
          
          </div>
        </div>
        <p>Gabinete Grindor<br><b>$100</b></p>
      </div>
      <div class="w3-container">
        <img src="img/Ghost.jpg" style="width:70%">
        <p>Gabinete Ghost<br><b>$105</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/Apollo DT3.jpg" style="width:70%">
        <p>Apollo DT3<br><b>$90</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/White Tiger.jpg" style="width:70%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">
          
          </div>
        </div>
        <p>Gabinete White Tiger<br><b>$120</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/GT.jpg" style="width:70%">
        <p>Gabinete GT<br><b>$30</b></p>
      </div>
      <div class="w3-container">
        <img src="img/gabinete.jpg" style="width:100%">
        <p>Gabinete Ultra violeta<br><b>$150</b></p>
      </div>
    </div>
  </div> 
  <!-- Conteúdo da página final -->
</div>

</body>
</html>
