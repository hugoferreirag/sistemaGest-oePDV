<?php
Class  clientesController extends controller{
    public function index(){
        $dados = array();
        $users = new Clients();
        $dados['lista'] = $users->getAll();
        $this->loadTemplate('clientes', $dados);
	}
	
	public function get(){
		if(!empty($_POST['nome'])){
			$dados = '';
			$nome = addslashes($_POST['nome']);
			
			$client = new Clients();
		    $dados = $client->get($nome);
			echo json_encode($dados);
			
			
		}
	}
	public function fastUser(){
		$dados = array(
			'nome' => '');
		if(!empty($_POST['nome'])){
		 if(!empty($_POST['cpf'])){
			if(!empty($_POST['rua'])){
			 if(!empty($_POST['bairro'])){
		     	if(!empty($_POST['cidade'])){
							$nome = addslashes($_POST['nome']);
							$cidade = addslashes($_POST['cidade']);
							$bairro = addslashes($_POST['bairro']);
							$rua = addslashes($_POST['rua']);
							$cpf = addslashes($_POST['cpf']);
						    $user = new Clients();
							 if($user->adicionar($nome, $cpf, $rua, $bairro, $cidade)){
													
														header("Location: ".BASE_URL."vender");
													}
												}
											}
										}
									}
								}
					
					}
    public function novouser(){
		$dados = array(
			'nome' => '');
		if(!empty($_POST['nome'])){
		 if(!empty($_POST['cpf'])){
			if(!empty($_POST['rua'])){
			 if(!empty($_POST['bairro'])){
		     	if(!empty($_POST['cidade'])){
							$nome = addslashes($_POST['nome']);
							$cidade = addslashes($_POST['cidade']);
							$bairro = addslashes($_POST['bairro']);
							$rua = addslashes($_POST['rua']);
							$cpf = addslashes($_POST['cpf']);
						    $user = new Clients();
							 if($user->adicionar($nome, $cpf, $rua, $bairro, $cidade)){
													
														header("Location: ".BASE_URL."clientes");
													}
												}
											}
										}
									}
								}
					
					}
		public function delete(){
			$id = $_GET['id'];
			$deletar = new Clients();
			$deletar->deletar($id);
			
		}
		public function edit(){
			$id = addslashes($_POST['id']);
			$nome = addslashes($_POST['nome']);
			$cidade = addslashes($_POST['cidade']);
			$bairro = addslashes($_POST['bairro']);
			$rua = addslashes($_POST['rua']);
			$cpf = addslashes($_POST['cpf']);
			$user = new Clients();
			$user->editar($id, $nome, $bairro, $cidade, $rua, $cpf);
			header("Location: ".BASE_URL."clientes");
				
		}
				
	}

			

				
			

	


?>