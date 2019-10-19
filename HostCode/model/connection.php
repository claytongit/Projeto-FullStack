<?php

	class connection{

		private $pdo;

		public function __construct($host, $dbname, $user, $pass){
			try {
				$this->pdo = new PDO('mysql:charset=utf8;host='.$host.';dbname='.$dbname, $user, $pass);
			} catch (PDOException $e) {
				echo "Erro ao conectar com banco de dados ".getMessage();
			}
		}

		
		public function createEmail($email){
			$sql = $this->pdo->prepare('INSERT INTO email(email) VALUES(:e)');
			$sql->bindValue(":e", $email);
			$sql->execute();
		}

		public function createCadastrar($email, $password, $endereco, $complemento, $cidade, $estado, $numero){
			$sql = $this->pdo->prepare('INSERT INTO cadastrar(email, password, endereco, complemento, cidade, estado, numero) VALUES(:e, :p, :l, :c, :d, :t, :n)');
			$sql->bindValue(":e", $email);
			$sql->bindValue(":p", $password);
			$sql->bindValue(":l", $endereco);
			$sql->bindValue(":c", $complemento);
			$sql->bindValue(":d", $cidade);
			$sql->bindValue(":t", $estado);
			$sql->bindValue(":n", $numero);
			$sql->execute();
		}
	}
?>