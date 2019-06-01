<?php
class Vendas extends model{
    public function getAll(){
        $array = array();
		$sql = "SELECT * FROM vendas_conc";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;

	}
	public function getAllv1(){
        $array = array();
		$sql = "SELECT * FROM vendas";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;

    }
}

