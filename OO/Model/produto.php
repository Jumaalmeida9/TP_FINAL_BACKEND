<?php

    class Produto{
        private $id;

        private $nome;

        private $descricao;

        private $preco;

        private $categoria;

            function __construct($id,$nome,$descricao,$preco,$categoria){

                    $this -> id = $id;
                    $this -> nome = $nome;
                    $this -> descricao = $descricao;
                    $this -> preco = $preco;
                    $this -> categoria = $categoria;
            }
    

        public function getId(){

           return $this->id;
        }
        public function setId($id){

             $this->id = $id;
         }

         public function getNome(){

            return $this->nome;
         }

         public function setNome($nome){

            $this->id = $nome;
        }
        
        public function getDescricao(){

            return $this->descricao;

        }

        public function setDescricao($descricao){

            $this->id = $descricao;
        }

        public function getPreco(){

            return $this->preco;

        }

        public function setPreco($preco){

            $this->id = $preco;

        }

        public function getCategoria(){

            return $this->categoria;

        }

        public function setCategoria($categoria){

            $this->id = $categoria;

        }

    }


?>