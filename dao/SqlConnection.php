<?php

class SqlConnection extends PDO{

		//$connection = new PDO("mysql:host=localhost;dbname=projetoponto", "root","");

		//$stmt = $connection->prepare("INSERT INTO tb_usuario (nome,cnpj,email,senha) VALUES(:NOME,:CNPJ,:EMAIL,:SENHA)");

		//$stmt = $connection->prepare("UPDATE tb_usuario SET nome = :NOME, cnpj = :CNPJ, email = :EMAIL, senha = :SENHA WHERE id = :ID");

		//$stmt = $connection->prepare("DELETE FROM tb_usuario WHERE id = :ID");

		/*$nome = "Fabiano2";
		$cnpj = "cnpj2";
		$email = "fabianooliveirale@gmail.com2";
		$senha = "12342";
		//$id = 1;
		//$stmt->bindParam(":ID",$id);
		$stmt->bindParam(":NOME",$nome);
		$stmt->bindParam(":CNPJ",$cnpj);
		$stmt->bindParam(":EMAIL",$email);
		$stmt->bindParam(":SENHA",$senha);

		$stmt->execute();*/

		private $connection;

		public function __construct(){

				$this->connection = new PDO("mysql:host=191.177.186.163;dbname=projetoponto", "root","");

		}

		private function setParams($statemant, $parameters = array()){

				foreach ($parameters as $key => $value) {
					$this->setParam($statemant,$key, $value);
				}

		}

		private function setParam($statemant, $key, $value){
			
				$statemant->bindParam($key, $value);
		}

			/*
				rawquery é uma var de uma linha query! COMMANDO SQL
				params paramentros que ira passar!
			*/

		public function query($rawQuery, $params = array())
		{

				$stmt = $this->connection->prepare($rawQuery);

				$this->setParams($stmt, $params);

				$stmt->execute();

				return $stmt;

		}

		public function select($rawQuery, $params = array()):array
		{

				$stmt = $this->query($rawQuery, $params);

				return $stmt->fetchall(PDO::FETCH_ASSOC);
		}

}

?>