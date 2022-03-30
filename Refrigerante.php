<?php
    require_once 'Bebida.php';
    class Refrigerante extends Bebida{

        private $retornavel;

        public function getRetornavel(){
            return $this->sabor;
        }
        public function setRetornavel($retornavel){
            $this->retornavel = $retornavel;
        }
        public function mostrarBebida(){

            $dados = array(
                'nome'=> $this->getNome(),
                'preco'=> $this->getPreco(),
                'retornavel' => $this->retornavel,           
                           
            );
    
            return $dados;

        }
        public function verificarPreco(){
            $retornar = false;
            if($this->getPreco() < 5){
                $retornar = true;
            }else{
                $retornar = false;
            }
            return $retornar;
        }
    }

?>