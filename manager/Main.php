<?php

date_default_timezone_set('America/fortaleza');
include 'Conexao.php';

class Main extends Conexao
{

	public function __construct(){	
	}

	public function getAll($table){
		$pdo = parent::get_instance();
		$sql = "SELECT * FROM $table";
		$statement = $pdo->query($sql);
		$statement->execute();
		return $statement->fetchAll();
	}

	public function getEventos($table){
		$pdo = parent::get_instance();
		$sql = "SELECT c.nomeContato,e.* FROM eventos e
		join contatos c on c.id=e.idCadastro";
		$statement = $pdo->query($sql);
		$statement->execute();
		return $statement->fetchAll();
	}

	public function getID($table,$id){
		$pdo = parent::get_instance();
		$sql = "SELECT * FROM $table where id = '$id' ";
		$statement = $pdo->query($sql);
		$statement->execute();
		return $statement->fetchAll();
	}

	public function insertData($table,$data){
		$pdo = parent::get_instance();
		$fields = implode(", ", array_keys($data));
		$values = ":". implode(", :",array_keys($data));
		$sql = "INSERT INTO $table($fields) VALUES ($values)";
		$statement = $pdo->prepare($sql);
		foreach ($data as $key => $value) {
			$statement->bindValue(":$key",$value,\PDO::PARAM_STR);
		}
		$statement->execute();
	}

	public function updateData($table, $data){
		$pdo = parent::get_instance();
		$new_values = "";
		foreach ($data as $key => $value) {
			$new_values.= "$key=:$key, ";

		}
		$new_values = substr($new_values, 0, -2);
		$sql = "UPDATE $table SET $new_values WHERE id = :id";
		$statement = $pdo->prepare($sql);
		foreach ($data as $key => $value) {
			$statement->bindValue(":$key", $value , \PDO::PARAM_STR);
		}

		$statement->execute();
	}

	public function deleteData($table, $id){
		$pdo = parent::get_instance();
		$sql = "DELETE FROM $table WHERE id = '$id'";
		$statement = $pdo->query($sql);
		$statement->execute();
	}
}
