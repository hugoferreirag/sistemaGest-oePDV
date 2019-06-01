<?php
Class  productsController extends controller{
    public function index(){
        $dados = array();
        $users = new Products();
        $dados['lista'] = $users->getAll();
        $this->loadTemplate('products', $dados);
    }
    public function novoProduto(){
		$dados = array(
			'nome' => '');
		if(!empty($_POST['nome'])){
		 if(!empty($_POST['preco'])){
			if(!empty($_POST['quantidade'])){
				$arquivo = $_FILES['file'];
					if(!empty($arquivo['tmp_name'])){
						$arquivo_nome = md5(time().rand(0,99)).'.png';
						move_uploaded_file($arquivo['tmp_name'], 'assets/images/'.$arquivo_nome);
							$nome = addslashes($_POST['nome']);
							$preco = addslashes($_POST['preco']);
							$quantidade = addslashes($_POST['quantidade']);;
						    $user = new Products();
							 if($user->adicionar($nome, $preco, $quantidade, $arquivo_nome)){
													
														header("Location: ".BASE_URL.'products');
							                           }
													}
												}
											
										}
									}
					
					}
		public function delete(){
			$id = $_GET['id'];
			$deletar = new Products();
			$deletar->deletar($id);
			
		}
		public function edit(){
			$id = addslashes($_POST['id']);
			$nome = addslashes($_POST['nome']);
			$preco = addslashes($_POST['preco']);
			$quantidade = addslashes($_POST['quantidade']);

			$user = new Products();
			$user->editar($id, $nome, $preco, $quantidade);
			header("Location: ".BASE_URL.'products');
				
		}
				
	}

			

				
			

	


?>