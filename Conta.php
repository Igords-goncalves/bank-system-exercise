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
            # code ...
        }

        public function depositar() {
            if (!!$this->statusDaConta) {
                # code...
            }
        }

        public function sacar() {
            if (!!$this->statusDaConta && $this->saldoDaConta > 0) {
                # code ...
            }
        }

        public function pagarMensalidade() {
            # code ...
        }

        # Constructor

        public function __construct() {
            $this->statusDaConta = false;
            $this->saldoDaConta = 0;
        }

        # Métodos Getters e Setters

        public function getNumero() {
            return $this->numeroDaConta;
        }
        public function setNumero($numero) {
            $this->numeroDaConta = $numero;
        }

        public function getTipo() {
            return $this->tipoDaConta;
        }
        public function setTipo($tipo) {
            $this->tipoDaConta = $tipo;
        }

        public function getDono() {
            return $this->donoDaConta;
        }
        public function setdono($dono) {
            $this->donoDaConta = $dono;
        }

        public function getSaldo() {
            return $this->donoDaConta;
        }
        public function setSaldo($dono) {
            $this->donoDaConta = $dono;
        }

        public function getStatus() {
            return $this->statusDaConta;
        }
        public function setStatus($status) {
            $this->statusDaConta = $status;
        }
    }
?>