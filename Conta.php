<?php
    class Conta {
        public $numeroDaConta;
        protected $tipoDaConta;
        private $donoDaConta;
        private $saldoDaConta;
        private $statusDaConta;

        public function abrirConta() {
            if (!!$this->statusDaConta && $this->tipoDaConta == "CC") {
                $this->saldoDaConta = 50;
            } else {
                $this->saldoDaConta = 150;
            }
        }

        public function fecharConta() {
            // code ...
        }

        public function sacar() {
            if (!!$this->statusDaConta && $this->saldoDaConta > 0) {
                
            }
        }
    }
?>