<?php
    class Conta {
        public $numeroDaConta;
        protected $tipoDaConta;
        private $donoDaConta;
        private $saldoDaConta;
        private $statusDaConta;

        // Principias funcionalidades

        public function abrirConta($type) {
            $this->setTipo($type); //Acessando o objeto global
            $status = $this->setStatus(true); // Atribuindo a uma variável

            if ($type == "CC" && !!$status) {
                $this->saldoDaConta = 50;
            } else {
                $this->saldoDaConta = 150;
            }
        }

        public function fecharConta() {
            $saldo = $this->saldoDaConta;

            if ($saldo > 0 || $saldo < 0) {
                print("Impossível fechar conta: R$$saldo &nbsp");
                // $saque = $this->sacar();
                // return $saque;
            } else {
                $this->setStatus(false);
            }
        }

        public function gerarNumero() {
            if (!!$this->statusDaConta) {
                $this->setNumero(rand(100000, 999999));
            }
        }

        public function depositar($valor) {
            $status = $this->statusDaConta;

            if (!!$status) {
                $this->setSaldo( //Eficaz 
                    $this->getSaldo() + $valor);
            } else {
                print("Conta está fechada.");
            }
        }

        public function sacar($valor) {
            $status = $this->statusDaConta;
            $saldo = $this->saldoDaConta;

            if (!!$status && $saldo > 0) {
                $this->setSaldo($this->getSaldo() - $valor);
                print("Valor do saque: $valor <br>");
            } else if(!!$status && $saldo <= 0) {
                print("Saldo insuficiente: $saldo <br>");
            }
        }

        public function pagarMensalidade() {
            $status = $this->statusDaConta;
            $tipo = $this->tipoDaConta;

            if (!!$status && $tipo == "CC") {
                $this->setSaldo($this->getSaldo() - 12);
            } else {
                $this->setSaldo($this->getSaldo() - 20);
            }
        }

        // Constructor

        public function __construct() {
            $this->statusDaConta = false;
            $this->saldoDaConta = 0;
        }

        // Métodos Getters e Setters

        public function getNumero() { //Acessa
            return $this->numeroDaConta;
        }
        public function setNumero($numero) { //Modifica
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
            return $this->saldoDaConta;
        }
        public function setSaldo($saldo) {
            $this->saldoDaConta = $saldo;
        }

        public function getStatus() {
            return $this->statusDaConta;
        }
        public function setStatus($status) {
            $this->statusDaConta = $status;
        }
    }
?>