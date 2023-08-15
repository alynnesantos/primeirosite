<?php
    session_start();
    include 'conexao.php';

    #VERIFICA SE O email OU SENHA ESTÃO VAZIOS, E REDIRECIONA PARA A TELA DE ACESSO CASO ESTEJA
    /*if( !empty($_POST['email']) || !empty($_POST['senha']) ){
        header('Location: Home.php');
        exit();
    }*/

    #CONSTROI O NOSSO COMANDO SQL DE CONSULTA
    $email = mysqli_real_escape_string($conexao,$_POST['email']);
    $senha = mysqli_real_escape_string($conexao,$_POST['senha']);
    $query = 'SELECT email, nivel from funcionario where email = "'.$email.'" and senha = md5("'.$senha.'")';

    #REALIZA A CONSULTA NO BANCO
    $resultado = mysqli_query($conexao,$query);
    #RETORNA O NÚMERO DE LINHAS DA NOSSA CONSULTA
    
    $info = mysqli_fetch_array($resultado);

    $linha = mysqli_num_rows($resultado);


    #CASO A CONSULTA RETORNE UM VALOR, PERMITE O ACESSO. CASO NÃO, REDIRECIONA PARA A TELA DE ACESSO
    if ($linha == 1) {
        $_SESSION['email'] = [$info[0], $info[1]];
        header('Location: Home.php'); //direciona para a página inicial do sistema
        exit();
    } else{
        $_SESSION['nao_autenticado'] = true;//inicia uma nova sessão caso o usuário tente um acesso sem sucesso
        header('Location: index.php'); //direciona novamente para a tela de login
        exit();
    }
?>