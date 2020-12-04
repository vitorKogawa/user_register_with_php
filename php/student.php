<?php
    class Student{
        private $nome;
        private $ra;
        private $sexo;
        private $idade;
        private $telefone;
        private $endereco;
        private $email;
        
        /**
         * @param $nome é o nome do aluno
         * @param $ra registro acadêmico do aluno
         * @param $sexo é o sexo do aluno
         * @param $idade é a idade do aluno
         * @param $telefone é o telefone do aluno
         * @param $endereco é o endereco do aluno
         * @param $email é o email do aluno
         */
        public function __construct($nome, $ra, $sexo, $idade, $telefone, $endereco, $email){
            $this->nome = $nome;
            $this->ra = $ra;
            $this->sexo = $sexo;
            $this->idade = $idade;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->email = $email;
        }

        //nome
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        //ra
        public function getRA(){
            return $this->ra;
        }

        public function setRA($ra){
            $this->ra = $ra;
        }

        //sexo
        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        //idade
        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        //telefone
        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        //endereco
        public function getEndereco(){
            return $this->endereco;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        //email
        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }
    }

?>