<?php
    class Pagina{

        public function head($titulo_pagina){
            echo '
            <!DOCTYPE html>
            <html>
            <head>
                <title>'.$titulo_pagina.'</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" type="text/css" href="css/main.css">
                <link rel="stylesheet" type="text/css" href="css/util.css">

                <!--===============================================================================================-->	
                    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
                <!--===============================================================================================-->
                    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
                <!--===============================================================================================-->
                    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
                <!--===============================================================================================-->
                    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
                <!--===============================================================================================-->
                    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
                <!--===============================================================================================-->
                    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

                <style>
                    .w3-sidebar a {font-family: "Roboto", sans-serif}
                    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
              
                </style>
            
                <script>
                // Accordion 
                function myAccFunc(menu) {
                var x = document.getElementById(menu);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
                }
            
                // Click on the "Jeans" link on page load to open the accordion for demo purposes
                document.getElementById("myBtn").click();
            
            
                // Open and close sidebar
                function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
                }
                
                function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
                }
                </script>
            </head>
            ';
        }
        
        public function SidebarMenu(){
            echo '
            <!-- Sidebar/menu -->
            <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
            <div class="w3-container w3-display-container w3-padding-16">
                <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
                <a href="Home.php" class="w3-wide w3-button"><b>HypeX</b></a>
            </div>
            <div class="w3-padding-64 w3-large w3-text-black" style="font-weight:bold">
                
                <!-- MENU CLIENTE -->
                <a onclick="myAccFunc('."'menu_cliente'".')" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                Clientes <i class="fa fa-caret-down"></i>
                </a>
                <div id="menu_cliente" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                <a href="Cliente.php" class="w3-bar-item w3-button';if ($_SERVER['PHP_SELF']=='/finalphp___original/front.php'){ echo ' w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>';}else{echo '">';}echo'Cadastrar Novo</a>
                <a href="gerenciarcliente.php" class="w3-bar-item w3-button">Gerenciar</a>
                <a href="consultacliente.php" class="w3-bar-item w3-button">Consultar</a>
                </div>
                <!-- MENU FUNCIONÁRIO - Verificar Nível de Acesso -->
                <a onclick="myAccFunc('."'menu_func'".')" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                Funcionários <i class="fa fa-caret-down"></i>
                </a>
                <div id="menu_func" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                <a href="funcionario.php" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Cadastrar Novo</a>
                <a href="gerenciarfunc.php" class="w3-bar-item w3-button">Gerenciar</a>
                <a href="consultafuncionario.php" class="w3-bar-item w3-button">Consultar</a>
                </div>

                <!-- MENU PRODUTOS-->
                <a onclick="myAccFunc('."'menu_produtos'".')" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                Produtos <i class="fa fa-caret-down"></i>
                </a>
                <div id="menu_produtos" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                <a href="cadproduto.php" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Cadastrar Novo</a>
                <a href="gerenciarproduto.php" class="w3-bar-item w3-button">Gerenciar</a>
                <a href="consultaproduto.php" class="w3-bar-item w3-button">Consultar</a>
                </div>

                <!-- MENU VENDAS-->
                <a onclick="myAccFunc('."'menu_vendas'".')" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                Vendas <i class="fa fa-caret-down"></i>
                </a>
                <div id="menu_vendas" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                <a href="Vendas.php" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Cadastrar Novo</a>
                <a href="gerenciarvendas.php" class="w3-bar-item w3-button">Gerenciar</a>
                <a href="consultavendas.php" class="w3-bar-item w3-button">Consultar</a>
                </div>

                <!-- MENU PERIFÉRICOS-->
                <a onclick="myAccFunc('."'menu_periferico'".')" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                Periféricos <i class="fa fa-caret-down"></i>
                </a>
                <div id="menu_periferico" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                <!--<a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Cadastrar Novo</a>-->
                <a href="Gabinetes.php" class="w3-bar-item w3-button">Gabinetes</a>
                <a href="Mouse.php" class="w3-bar-item w3-button">Mouse</a>
                <a href="Teclado.php" class="w3-bar-item w3-button">Teclado</a>
                <a href="Headset.php" class="w3-bar-item w3-button">Headset</a>
                </div>
                
            </div>
            </nav>

            <!-- Top menu on small screens -->
            <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
            <div class="w3-bar-item w3-padding-24 w3-wide">TESTE</div>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            </header>

            <!-- Overlay effect when opening sidebar on small screens -->
            <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
            ';
        }

        public function DivConteudo($titulo_pagina,$conteudo){
            $div = '
            <div class="w3-main" style="margin-left:180px;margin-top:80px;">

            <!-- Push down content on small screens -->

            <div class="w3-hide-large" style="margin-top:83px"></div>            
                <!-- Top header -->
                <header class="w3-container w3-xlarge">
                    <!--<p class="w3-left">SEJA BEM VINDO</p>-->
                </header>

                <h1 style="margin-left:95px">'.$titulo_pagina.'</h1>
                <div class="w3-container" style="margin-left:80px">'
                    .$conteudo.    
                '</div>
            <!-- End page content -->
            </div>
            ';
            return $div;
        }
        
        public function Body($titulo_pagina,$conteudo,bool $sidebar){
            echo '<body class="w3-content" style="max-width:1200px">';
            if($sidebar){echo $this->SidebarMenu();}
            echo $this->DivConteudo($titulo_pagina,$conteudo);
            echo '</body>
            </html>';
        }

        ##################FUNÇÕES DE FORM##################
        #Insere um Text, Email, Password, Color, Date, Datetime-local, Month, Hidden, Number
        function input_Form($type,$nome, $label, bool $required){
            $input = '<p>'.$label.'<input type="'.$type.'" id="'.$nome.'" name="'.$nome.'" class="w3-input"';
            if ($required == true) { 
                $input .= ' required';
            }
            $input .= '/></p>';
            return $input;
        }
            
        #Insere um submit,reset
        function action_Form($type,$valor){
            return '<input type="'.$type.'" value="'.$valor.'" class="w3-input"/>';
        }

        #Essa Função uma lista de Opções, tanto em RadioButton como em Checkbox
        function escolha_Form($nome, $type ,array $labels){
            $radio = "<p>$nome</p> ";
            foreach ($labels as $label) {
                $radio .= '<input type="'.$type.'" name="'.$nome.'" id="'.$label.'" value="'.$label.'" class="w3-radio" ';
                    if ($label == $labels[0]) { $radio .= 'checked';} //Verifica se é o primeiro elemento do array
                $radio .= '/><label for="'.$label.'">'.$label.'</label>';
            }
            //$radio .="</p>";
            return $radio;
        }

        #Lista de sugestões
        function input_Datalist_cliente($conexao){
            $jubileu = 'SELECT * FROM usuarios';
            $resultado = mysqli_query($conexao,$jubileu);
            $linha = mysqli_fetch_assoc($resultado);
            $total = mysqli_num_rows($resultado);

            $list = 'Cliente: <input type="text" name="listacliente" list="listacliente">
                        <datalist id="listacliente">';
            if ($total > 0) {
                do {
                    $list .= '<option value="'.$linha['id_cliente'].'" label="'.$linha['nome'].'">';
                } while ($linha = mysqli_fetch_assoc($resultado));
            }
            $list .='</datalist>';
            return $list;
        } 

        function input_Datalist_funcionario($conexao){
            $jubileu = 'SELECT * FROM funcionario';
            $resultado = mysqli_query($conexao,$jubileu);
            $linha = mysqli_fetch_assoc($resultado);
            $total = mysqli_num_rows($resultado);

            $list = 'Vendedor: <input type="text" name="listavendedor" list="listavendedor">
                        <datalist id="listavendedor">';
            if ($total > 0) {
                do {
                    $list .= '<option value="'.$linha['id_vendedor'].'" label="'.$linha['nome'].'">';
                } while ($linha = mysqli_fetch_assoc($resultado));
            }
            $list .='</datalist>';
            return $list;
        } 

        function input_Datalist_produto($conexao){
            $jubileu = 'SELECT * FROM produto';
            $resultado = mysqli_query($conexao,$jubileu);
            $linha = mysqli_fetch_assoc($resultado);
            $total = mysqli_num_rows($resultado);

            $list = 'Produto: <input type="text" name="listaproduto" list="listaproduto">
                        <datalist id="listaproduto">';
            if ($total > 0) {
                do {
                    $list .= '<option value="'.$linha['id_produto'].'" label="'.$linha['descricao'].'">';
                } while ($linha = mysqli_fetch_assoc($resultado));
            }
            $list .='</datalist>';
            return $list;
        } 
        function input_Datalist_produto2($conexao){
            $jubileu = 'SELECT * FROM produto';
            $resultado = mysqli_query($conexao,$jubileu);
            $linha = mysqli_fetch_assoc($resultado);
            $total = mysqli_num_rows($resultado);

            $list = 'Produto: <input type="text" name="listaproduto" list="listaproduto">
                        <datalist id="listaproduto">';
            if ($total > 0) {
                do {
                    $list .= '<option value="'.$linha['id_produto'].'" label="'.$linha['descricao'].'">';
                } while ($linha = mysqli_fetch_assoc($resultado));
            }
            $list .='</datalist>';
            return $list;
        }  

        #Essa Função recebe todos os elementos do Form em um Array e Cria o Form
        function criar_Form($action,$metodo, array $inputs){
            $form = '<form action="'.$action.'" method="'.$metodo.'" >';
            foreach ($inputs as $input) {
                $form .= $input;
            }
            $form .= '</form>';
            return $form;
        }
    }

?>