<?php 
class Products extends model{

	public function getAll(){

		$array = array();
		$sql = "SELECT * FROM products";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;

	}
	public function adicionar($nome, $preco, $quantidade,$arquivo_nome){
		$array = array();
		$sql = "INSERT INTO products (nome, preco, quantidade, arquivo) VALUES (:nome, :preco, :quantidade, :arquivo_nome)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':preco', $preco);
		$sql->bindValue(':quantidade', $quantidade);
		$sql->bindValue(':arquivo_nome', $arquivo_nome);
		$sql->execute();
		return true;
	}

	public function deletar($id){
		$sql = "DELETE FROM products WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
        $sql->execute();
        header("Location: ".BASE_URL.products);
    }
    public function editar($id, $nome, $preco, $quantidade){
		$sql = "UPDATE `products` SET `nome`= :nome,`preco`= :preco,`quantidade`= :quantidade WHERE id = :id";
		$sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':preco', $preco);
        $sql->bindValue(':quantidade', $quantidade);
        $sql->execute();
     
     
    }

}

