<?php
    require_once 'Bebida.php';

    class Vinho extends Bebida{

        private $safra;
        private $tipo;

        public function setSafra($safra){
            $this->safra = $safra;
        }
        public function getSafra(){
            return $this->safra;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function mostrarBebida(){

            $dados = array(
                'nome'=> $this->getNome(),
                'preco'=> $this->getPreco(),
                'safra' => $this->safra,           
                'tipo' => $this->tipo,           
            );
    
            return $dados;

        }
        public function verificarPreco(){
            $retornar = false;
            if($this->getPreco() < 25){
                $retornar = true;
            }else{
                $retornar = false;
            }
            return $retornar;
        }
    }
?>