<?php 
class Clients extends model{
	
	public function getAll(){

		$array = array();
		$sql = "SELECT * FROM users";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;

	}
	public function adicionar($nome, $cpf, $rua, $bairro, $cidade){
		$array = array();
		$sql = "INSERT INTO users (nome, cpf, rua, bairro, cidade) VALUES (:nome, :cpf, :rua, :bairro, :cidade)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':cpf', $cpf);
		$sql->bindValue(':rua', $rua);
		$sql->bindValue(':bairro', $bairro);
		$sql->bindValue(':cidade', $cidade);
		$sql->execute();
		return true;
	}

	public function deletar($id){
		$sql = "DELETE FROM users WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
        $sql->execute();
        header("Location: ".BASE_URL."clientes");
    }
    public function editar($id, $nome, $bairro, $cidade, $rua, $cpf){
		$sql = "UPDATE `users` SET `nome`= :nome,`cpf`= :cpf,`rua`= :rua,`bairro`= :bairro,`cidade`= :cidade WHERE id = :id";
		$sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':cidade', $cidade);
        $sql->execute();
     
     
    }

}

