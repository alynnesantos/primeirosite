<?php
    require_once 'verificalogin.php';
    require_once 'Pagina.php';
    $page = new Pagina();

    $page->head('Home');
    $page->SidebarMenu();
?>

<!-- Menu principal em telas pequenas -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">Hyperx</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Efeito de sobreposição ao abrir a barra lateral em telas pequenas -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !Conteúdo da página!--> 
  <div class="w3-main" style="margin-left:250px">

<!-- Empurre o conteúdo para baixo em telas pequenas -->
  <div class="w3-hide-large" style="margin-top:250px"></div>
  
<!-- Cabeçalho superior -->
  <header class="w3-container w3-xlarge">
  <div class="w3-main" style="margin:50px">
  <div class="w3-hide-large" style="margin-top:100px"></div>
    <p class="w3-left">Produtos em destaque</p>
    <p class="w3-right">  
      <i><a href="logout.php">Sair</a></i>
      <!--<i class="fa fa-search"></i>-->
      <p>
    </header>
    </div>


  <div class="w3-container w3-white" id="jeans">
    <p>8 items</p>
  </div>

  <!-- Grade de produto-->
  <div class="w3-row w3-blackscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src=".jpg" style="width:100%">
        <p>Sumido<br><b>$21.00</b></p>
      </div>
      <div class="w3-container">
       <!-- <img src="mouse/Cobra Lunar White.jpg" style="width:70%">
        <p>Sumido<br><b>$22.99</b></p> -->
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
        <p>Mouse Cobra Lunar<br><b>$100</b></p>
      </div>
      <div class="w3-container">
        <img src="teclado/Alloy.jpg" style="width:70%">
        <p>Teclado Alloy<br><b>$105</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="img/White Tiger.jpg" style="width:70%">
        <p>Gabinete White Tiger<br><b>$90</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="teclado/Blackwidow2.jpeg" style="width:70%">
          <span class="w3-tag w3-display-topleft"></span>
          <div class="w3-display-middle w3-display-hover">
          
          </div>
        </div>
        <p>Teclado BlackWidow<br><b>$120</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="headset/Fortrek.jpg" style="width:70%">
        <p>Headset Logitech<br><b>$30</b></p>
      </div>
      <div class="w3-container">
        <img src="headset/Razer Kraken.jpeg" style="width:60%">
        <p>Headset Razer<br><b>$150</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
    <!--  <div class="w3-container">
        <img src="teclado/Blackwidow2.jpeg" style="width:70%">
        <p>BlackWidow<br><b>$90</b></p> 
      </div> -->
      <div class="w3-container">
        <div class="w3-display-container">
        </div>
  </div> 
  <!-- Conteúdo da página final -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
