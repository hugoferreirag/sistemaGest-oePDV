<?php 
class Carrinho extends model{
	public function setCar($id){
		$client = array();
		$nome = '%'.$id.'%';
		$sql = "SELECT * FROM users WHERE id = '$id'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			foreach($sql->fetchAll() as $client){
				$produtos = '';
				$id = $client['id'];
				$nome = $client['nome'];
				$token = md5($nome.'para'.$id.rand(10,1000));
				$_SESSION['vendor'] = [$id, $nome, $token];
	
			}		
		
		}
	
		

	}
	public function deletar($id){
		$sql = "DELETE FROM carrinhotemp WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
        $sql->execute();
        header("Location: ".BASE_URL."carrinho");
    }
	public function getCar(){
		$client = array();
		$sql = "SELECT * FROM carrinhotemp";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$client = $sql->fetchAll();

		}
		return $client;
	}

	public function getAll(){

		$array = array();
		$sql = "SELECT * FROM users";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;

	}
	public function insertTemp($produto,$qtd,$nomep,$preco, $arquivo){
		$subtotal = $preco * $qtd;
		$_SESSION['pQtd'] += $qtd ;
		$_SESSION['vTotal'] += $subtotal;
		$_SESSION['cart'] = [$_SESSION['pQtd'], $_SESSION['vTotal']];
	
		$sql = "INSERT INTO carrinhotemp (arquivo ,codigo_compra, client_id, client_name, products,products_name,preco, quantidade,sub_total,total, _data) VALUES (:arquivo, :token, :id, :nome, :produto, :nomep,:preco, :qtd,:subtotal,:total, now())";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':arquivo', $arquivo);
		$sql->bindValue(':token', $_SESSION['vendor'][2]);
		$sql->bindValue(':id', $_SESSION['vendor'][0]);
		$sql->bindValue(':nome', $_SESSION['vendor'][1]);
		$sql->bindValue(':produto', $produto);
		$sql->bindValue(':nomep', $nomep);
		$sql->bindValue(':preco', $preco);
		$sql->bindValue(':qtd', $qtd);
		$sql->bindValue(':subtotal', $subtotal);
		$sql->bindValue(':total', $_SESSION['vTotal']);
		$sql->execute();
	$sql = "SELECT products FROM carrinhotemp";
	$sql = $this->db->query($sql);
	if($sql->rowCount() > 0){
		foreach($sql->fetch() as $produto){
			
		;

		
	}

		}
	echo	json_encode($_SESSION['cart']);
	
		
	}
	public function deleteAll(){
		$sql = "TRUNCATE TABLE carrinhotemp";
		$sql = $this->db->query($sql);
	}

	public function editProduct($id, $preco, $qtdA, $qtdN, $sub){
		$_SESSION['pQtd'] -= $qtdA;
		$_SESSION['pQtd'] += $qtdN;
		$_SESSION['vTotal'] -= $sub;
		$subtotal = $preco * $qtdN;
		$_SESSION['vTotal'] += $subtotal;
		$sql = "UPDATE `carrinhotemp` SET `quantidade`= :qtdN,`sub_total`= :sub WHERE id = :id";
		$sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':qtdN', $qtdN);
        $sql->bindValue(':sub', $_SESSION['vTotal']);
        $sql->execute();
		
	}

	public function concluirVenda(){
		$sql ="INSERT INTO vendas ( codigo_compra, client_id, client_name, products, products_name, preco, quantidade,sub_total, total, _data) SELECT  codigo_compra, client_id, client_name, products, products_name, preco, quantidade,sub_total, total, _data FROM carrinhotemp";
		$sql = $this->db->query($sql);
		$sql ="INSERT INTO vendas_conc (token, client_name, total,_data)VALUES(:token, :client_name, :total, now())";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':token', $_SESSION['vendor'][2]);
		$sql->bindValue(':client_name', $_SESSION['vendor'][1]);
		$sql->bindValue(':total', $_SESSION['vTotal']);
		$sql->execute();
		$_SESSION['vendor'] = '';
		$_SESSION['pQtd'] = 0;
		$_SESSION['vTotal'] = 0;
	}

}

