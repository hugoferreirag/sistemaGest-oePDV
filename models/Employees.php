<?php 
class Employees extends model{

	public function getAll(){

		$array = array();
		$sql = "SELECT * FROM employees";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;

	}
	public function adicionar($nome, $cpf, $bairro, $cidade, $rua, $salario){
		$array = array();
		$sql = "INSERT INTO employees (nome, cpf, bairro, cidade, rua, salario) VALUES (:nome, :cpf, :bairro, :cidade, :rua, :salario)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':cpf', $cpf);
		$sql->bindValue(':bairro', $bairro);
		$sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':salario', $salario);
		$sql->execute();
		return true;
	}

	public function deletar($id){
		$sql = "DELETE FROM employees WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
        $sql->execute();
        header("Location: ".BASE_URL."employees");
    }
    public function editar($id, $nome, $cpf, $rua, $bairro, $cidade, $salario){
		$sql = "UPDATE `employees` SET `nome`= :nome,`cpf`= :cpf,`rua`= :rua,`bairro`= :bairro,`cidade`= :cidade, `salario`= :salario WHERE id = :id";
		$sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':salario', $salario);
        $sql->execute();
     
     
    }

}

