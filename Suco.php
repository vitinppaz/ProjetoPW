<?php
    
    require_once 'Bebida.php';
    class Suco extends Bebida{
         
        private $sabor;

        public function getSabor(){
            return $this->sabor;
        }

        public function setSabor($sabor){
            $this->sabor = $sabor;
        }
        public function mostrarBebida(){

            $dados = array(
                'nome'=> $this->getNome(),
                'preco'=> $this->getPreco(),
                'sabor' => $this->sabor,           
                           
            );
    
            return $dados;

        }
        public function verificarPreco(){
            $retornar = false;
            if($this->getPreco() < 2.5){
                $retornar = true;
            }else{
                $retornar = false;
            }
            return $retornar;
        }
    }
?>