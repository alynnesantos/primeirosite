<?php
    $server = 'localhost';
    $user = 'root';
    $senha = '';
    $banco = 'judite';

    
    $conexao = mysqli_connect($server,$user,$senha,$banco) or die('Erro ao conectar Servidor. Erro:'.mysqli_error($conexao));
class sql{

#  PRODUTOS CONSULTA
    public function select_produto ($conexao){  
        $jubileu = 'SELECT * FROM produto';
        $resultado = mysqli_query($conexao,$jubileu);
        $linha = mysqli_fetch_assoc($resultado);
        $total = mysqli_num_rows($resultado);
        $registros = '<table class="table-bordered">';
        $registros .= '<thead><tr 
                            class="table100-head">
                            <th>Preço de Compra</th> 
                            <th>Descrição</th> 
                            <th>Preço de Venda</th> 
                            <th>Garantia</th> 
                            <th>Marca</th> 
                            <th>ID_produto</th> 
                       </thead>';

        if ($total > 0) {
            do {
                $registros .= '<tr><td>'
                .$linha['precodecompra'].'</td><td>'
                .$linha['descricao'].'</td><td>'
                .$linha['precodevenda'].'</td><td>'
                .$linha['garantia'].'</td><td>'
                .$linha['marca'].'</td><td>'
                .$linha['id_produto'].'</td>';
            } while ($linha = mysqli_fetch_assoc($resultado));
        }else{
            $registros = 'Sem Resultados';
        }
        $registros .= '</table>';
        return $registros;
    }     
   
    public function inserir_produto($conexao, $precodecompra, $descrição, $precodevenda, $garantia, $marca){
        $jubileu = "INSERT INTO `produto`(`precodecompra`, `descricao`, `precodevenda`, `garantia`, `marca`)
        VALUES ('$precodecompra','$descrição','$precodevenda','$garantia','$marca')";
        $insert = mysqli_query($conexao,$jubileu) or die($insert);
        header('Location: index.php');
       }


#  CLIENTE CONSULTA
   public function select_cliente ($conexao){  
        $jubileu = 'SELECT * FROM usuarios';
        $resultado = mysqli_query($conexao,$jubileu);
        $linha = mysqli_fetch_assoc($resultado);
        $total = mysqli_num_rows($resultado);
        $registros = '<table class="table-bordered">';
        $registros .= '<thead><tr 
                            class="table100-head">
                            <th>Nome</th>
                            <th>Endereço</th> 
                            <th>Telefone</th> 
                            <th>CPF</th> 
                            <th>E-mail</th>
                            <th>ID_Cliente</th>
                            </thead>';
        if ($total > 0) {
            do {
                $registros .= '<tr><td>'
                .$linha['nome'].'</td><td>'
                .$linha['endereco'].'</td><td>'
                .$linha['telefone'].'</td><td>'
                .$linha['cpf'].'</td><td>'
                .$linha['email'].'</td><td>'
                .$linha['id_cliente'].'</td>';
            } while ($linha = mysqli_fetch_assoc($resultado));
        }else{
            $registros .= 'Sem Resultados';
        }
        $registros .= '</table>';
        return $registros;
    }     
   public function inserir_cliente($conexao, $email, $nome, $endereço, $telefone, $cpf){
        $jubileu = "INSERT INTO `usuarios`(`email`, `nome`, `endereco`, `telefone`, `cpf`)
        VALUES ('$email','$nome','$endereço','$telefone','$cpf')";
        $insert = mysqli_query($conexao,$jubileu) or die($insert);
        header('Location: index.php');
    }


#  FUNCIONÁRIO CONSULTA
  
    public function select_funcionario ($conexao){  
        $jubileu = 'SELECT * FROM funcionario';
        $resultado = mysqli_query($conexao,$jubileu);
        $linha = mysqli_fetch_assoc($resultado);
        $total = mysqli_num_rows($resultado);
        $registros = '<table class="table-bordered">';
        $registros .= '<thead><tr 
                         class="table100-head">
                         <th>Nome</th> 
                         <th>Endereço</th> 
                         <th>Telefone</th> 
                         <th>CPF</th> 
                         <th>E-mail</th> 
                         <th>Nível</th>
                         <th>ID_Vendedor</th>
                         </thead>';
        if ($total > 0) {
            do {
                $registros .= '<tr><td>'
                .$linha['nome'].'</td><td>'
                .$linha['endereco'].'</td><td>'
                .$linha['telefone'].'</td><td>'
                .$linha['cpf'].'</td><td>'
                .$linha['email'].'</td><td>'
                .$linha['nivel'].'</td><td>'
                .$linha['id_vendedor'].'</td>';
            } while ($linha = mysqli_fetch_assoc($resultado));
        }else{
            $registros .= 'Sem Resultados';
        }
        $registros .= '</table>';
        return $registros;
    }     
   public function inserir_funcionario($conexao, $nome, $telefone, $cpf, $email, $endereco,$senha,$nivel){
        $jubileu = "INSERT INTO `funcionario`(`nome`,`telefone`,`cpf`,`email`,`endereco`,`senha`,`nivel`)
        VALUES ('$nome','$telefone','$cpf','$email','$endereco',md5('".$senha."'),'$nivel')";
        $insert = mysqli_query($conexao,$jubileu) or die($insert);
        header('Location: index.php');
    }

#  VENDAS CONSULTA              
    public function select_vendas ($conexao){  
        $jubileu = 'SELECT * FROM vendas';
        $resultado = mysqli_query($conexao,$jubileu);
        $linha = mysqli_fetch_assoc($resultado);
        $total = mysqli_num_rows($resultado);
        $registros = '<table class="table-bordered">';
        $registros .= '<thead><tr 
                         class="table100-head">
                         <th>ID_Venda</th>             
                         <th>ID_Produto</th> 
                         <th>Garantia</th>
                         <th>QTD</th> 
                         <th>Preço_und</th>
                         <th>SubTotal</th>  
                         <th>Data de Compra</th>
                         </thead>';
        if ($total > 0) {
            do {
                $registros .= '<tr><td>'   
                .$linha['id_venda'].'</td><td>' 
                .$linha['produto'].'</td><td>'
                .$linha['garantia'].'</td><td>'
                .$linha['qtd'].'</td><td>'
                .$linha['preco_und'].'</td><td>'
                .$linha['subtotal'].'</td><td>'
                .date("d / m / y ",strtotime($linha['datadecompra'])).'</td></td>';
            } while ($linha = mysqli_fetch_assoc($resultado));
        }else{
            $registros .= 'Sem Resultados';
        }
        $registros .= '</table>';
        return $registros;
    }     
   public function inserir_vendas($conexao, $id_cliente, $id_vendedor, $produto, $garantia, $qtd, $preco_und, $subtotal){
        $jubileu = "INSERT INTO `vendas`(`id_cliente`, `cliente`, `id_vendedor`, `vendedor`,`produto`, `garantia`, `qtd`,`preco_und`,`subtotal`)
        VALUES ('$id_cliente', '$id_vendedor', '$produto', '$garantia', '$qtd', '$preco_und', '$subtotal')";
        //echo $jubileu;
        $insert = mysqli_query($conexao,$jubileu) or die($insert);
        header('Location: index.php');
    }
#  VENDAS GERENCIAR
    public function select_vendas2 ($conexao){  
        $jubileu = 'SELECT * FROM vendas';
        $resultado = mysqli_query($conexao,$jubileu);
        $linha = mysqli_fetch_assoc($resultado);
        $total = mysqli_num_rows($resultado);
        $registros = '<table class="table-bordered">';
        $registros .= '<thead><tr 
                         class="table100-head">
                         <th>ID_Venda</th>
                         <th>ID_Cliente</th>
                         <th>Cliente</th> 
                         <th>ID_Vendedor</th>
                         <th>Vendedor</th> 
                         <th>Produto</th> 
                         <th>Preço(und)</th> 
                         <th>Total</th> 
                         <th>Data de Compra</th>
                         <th>Editar</th>
                         <th>Excluir</th>
                         </thead>';
        if ($total > 0) {
            do {
                $registros .= '<tr><td>'
                .$linha['id_venda'].'</td><td>' 
                .$linha['id_cliente'].'</td><td>'
                .$linha['cliente'].'</td><td>'
                .$linha['id_vendedor'].'</td><td>'
                .$linha['vendedor'].'</td><td>'
                .$linha['produto'].'</td><td>'
                .$linha['preco_und'].'</td><td>'
                .$linha['total'].'</td><td>'
                .date("d / m / y ",strtotime($linha['datadecompra'])).'</td><td><a href="#">EDITAR</a></td> <td><a href="#">EXCLUIR</a></td> </tr>';
            } while ($linha = mysqli_fetch_assoc($resultado));
        }else{
            $registros .= 'Sem Resultados';
        }
        $registros .= '</table>';
        return $registros;
    }     
    public function inserir_vendas2($conexao, $id_cliente, $cliente, $id_vendedor, $vendedor, $produto, $preco_und, $total){
        $jubileu = "INSERT INTO `vendas`(`id_cliente`, `cliente`, `id_vendedor`, `vendedor`,`produto`,`preco_und`,`total`)
        VALUES ('$id_cliente', '$cliente', '$id_vendedor', '$vendedor', '$produto', '$preco_und', '$total')";
        //echo $jubileu;
        $insert = mysqli_query($conexao,$jubileu) or die($insert);
        header('Location: index.php');}

#  CLIENTE GERENCIAR
   public function select_cliente2 ($conexao){  
        //$jubileu = 'SELECT * FROM `'.$tabela.'`';
        $jubileu = 'SELECT * FROM usuarios';
        $resultado = mysqli_query($conexao,$jubileu);
        $linha = mysqli_fetch_assoc($resultado);
        $total = mysqli_num_rows($resultado);
        $registros = '<table class="table-bordered">';
        $registros .= '<thead><tr 
                            class="table100-head">
                            <th>Nome</th>
                            <th>Endereço</th> 
                            <th>Telefone</th> 
                            <th>CPF</th> 
                            <th>E-mail</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                            </thead>';
        if ($total > 0) {
            do {
                $registros .= '<tr><td>'.$linha['nome'].'</td><td>'.$linha['endereco'].'</td><td>'.$linha['telefone'].'</td><td>'.$linha['cpf'].'</td><td>'.$linha['email'].'</td><td><a href="#">EDITAR</a></td> <td><a href="#">EXCLUIR</a></td> </tr>';
            } while ($linha = mysqli_fetch_assoc($resultado));
        }else{
            $registros .= 'Sem Resultados';
        }
        $registros .= '</table>';
        return $registros;
    }

#  FUNCIONARIO GERENCIAR 
    public function select_funcionario2 ($conexao){  
        $jubileu = 'SELECT * FROM funcionario';
        $resultado = mysqli_query($conexao,$jubileu);
        $linha = mysqli_fetch_assoc($resultado);
        $total = mysqli_num_rows($resultado);
        $registros = '<table class="table-bordered">';
        $registros .= '<thead><tr 
                         class="table100-head">
                         <th>Nome</th> 
                         <th>Endereço</th> 
                         <th>Telefone</th> 
                         <th>CPF</th> 
                         <th>E-mail</th> 
                         <th>Nível</th>
                         <th>Editar</th>
                         <th>Excluir</th>
                         </thead>';
        if ($total > 0) {
            do {
                $registros .= '<tr><td>'.$linha['nome'].'</td><td>'.$linha['endereco'].'</td><td>'.$linha['telefone'].'</td><td>'.$linha['cpf'].'</td><td>'.$linha['email'].'</td><td>'.$linha['nivel'].'</td><td><a href="#">EDITAR</a></td> <td><a href="#">EXCLUIR</a></td> </tr>';
            } while ($linha = mysqli_fetch_assoc($resultado));
        }else{
            $registros .= 'Sem Resultados';
        }
        $registros .= '</table>';
        return $registros;
    }
#  TB ITEM VENDAS
    public function select_tbitemvenda ($conexao){  
    $jubileu = 'SELECT * FROM itemvendas';
    $resultado = mysqli_query($conexao,$jubileu);
    $linha = mysqli_fetch_assoc($resultado);
    $total = mysqli_num_rows($resultado);
    $registros = '<table class="table-bordered">';
    $registros .= '<thead><tr 
                     class="table100-head">
                     <th>ID_Venda</th>
                     <th>ID_Produto</th>
                     <th>Quantidade</th> 
                     <th>SubTotal</th>
                     </thead>';
    if ($total > 0) {
        do {
            $registros .= '<tr><td>'
            .$linha['ID_venda'].'</td><td>' 
            .$linha['ID_produto'].'</td><td>'
            .$linha['quantidade'].'</td><td>'
            .$linha['subtotal'].'</td><td>';
        } while ($linha = mysqli_fetch_assoc($resultado));
    }else{
        $registros .= 'Sem Resultados';
    }
    $registros .= '</table>';
    return $registros;
 }    
    public function inserir_tbitemvenda($conexao, $ID_venda, $ID_produto, $quantidade, $subtotal){
    $jubileu = "INSERT INTO `itemvendas`(`ID_venda`, `ID_produto`, `quantidade`, `subtotal`)
    VALUES ('$ID_venda', '$ID_produto, '$quantidade', '$subtotal')";
    //echo $jubileu;
    $insert = mysqli_query($conexao,$jubileu) or die($insert);
    header('Location: index.php');} 

 }
?>

                                                                                                                       