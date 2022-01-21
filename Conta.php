<?php
    class Conta {
        public $numeroDaConta;
        protected $tipoDaConta;
        private $donoDaConta;
        private $saldoDaConta;
        private $statusDaConta;

        //&* Principias funcionalidades e regras do negócio

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
            $saldo = $this->saldoDaConta; // Atribí para variáveis a fim de facilitar a lógica

            if ($saldo > 0 || $saldo < 0) {
                print("Impossível fechar conta: R$$saldo &nbsp");
                // $saque = $this->sacar();
                // return $saque;
            } else {
                $this->setStatus(false);
                $this->numeroDaConta = 0; // Uma vez que a conta está fechada o número é cancelado
            }
        }

        //! Enfrentando um bug quanto a gerar um número aleatório

        public function gerarNumero() {
            if(!!$this->statusDaConta) {
                $this->setNumero(mt_rand(100000, 999999));
                // Posso retornar um valor verdadeiro que originalmente é falso
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

        //&* Constructor

        public function __construct() {
            $this->statusDaConta = false;
            $this->saldoDaConta = 0;
            $this->numeroDaConta = 0;
        }

        //&* Métodos Getters e Setters

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