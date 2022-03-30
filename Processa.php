<?php 
    
    require_once ('Vinho.php');
    require_once ('Suco.php');
    require_once ('Refrigerante.php');
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $safra = $_POST['safra'];
        $tipo = $_POST['tipo'];
        $sabor = $_POST['sabor'];
        $retornavel = $_POST['retornável'];
        if(!empty($safra) && !empty($tipo)){
            $vinho1 = new Vinho();
            $vinho1->setNome($nome);
            $vinho1->setPreco($preco);
            $vinho1->setSafra($safra);
            $vinho1->setTipo($tipo);
            $dados =  $vinho1->mostrarBebida();
            $retornar = $vinho1->verificarPreco();
            $tipo = "vinho";
        echo "<br><br>";
        }else if (!empty($sabor)){
            $suco1 = new Suco();
            $suco1->setNome($nome);
            $suco1->setPreco($preco);
            $suco1->setSabor($sabor);
            $dados = $suco1->mostrarBebida();
            $retornar = $suco1->verificarPreco();
            $tipo = "suco";
        echo "<br><br>";
        }else if (!empty($retornavel)){
            $refri1 = new Refrigerante();
            $refri1->setNome($nome);
            $refri1->setPreco($preco);
            $refri1->setRetornavel($retornavel);
            $dados = $refri1->mostrarBebida();
            $retornar = $refri1->verificarPreco();
            $tipo = "refri";
        }else{
            echo "você não selecionou nenhum tipo de bebida;";
        }
    }
?>