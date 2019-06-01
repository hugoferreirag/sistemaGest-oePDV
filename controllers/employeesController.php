<?php
Class  employeesController extends controller{
    public function index(){
        $dados = array();
        $users = new Employees();
        $dados['lista'] = $users->getAll();
        $this->loadTemplate('employees', $dados);
    }
    public function newEmployeer(){
		$dados = array(
			'nome' => '');
		if(!empty($_POST['nome'])){
		 if(!empty($_POST['cidade'])){
			if(!empty($_POST['bairro'])){
			 if(!empty($_POST['rua'])){
		     	if(!empty($_POST['cpf'])){
                    if(!empty($_POST['salario'])){
							$nome = addslashes($_POST['nome']);
							$cidade = addslashes($_POST['cidade']);
							$bairro = addslashes($_POST['bairro']);
							$rua = addslashes($_POST['rua']);
                            $cpf = addslashes($_POST['cpf']);
                            $salario = addslashes($_POST['salario']);
						    $user = new Employees();
							 if($user->adicionar($nome, $bairro, $cidade, $rua, $cpf, $salario)){
													
														header("Location: ".BASE_URL."employees");
													}
												}
											}
										}
									}
								}
                             }   
					}
		public function delete(){
			$id = $_GET['id'];
			$deletar = new Employees();
			$deletar->deletar($id);
			
		}
		public function edit(){
			$id = addslashes($_POST['id']);
			$nome = addslashes($_POST['nome']);
			$cidade = addslashes($_POST['cidade']);
			$bairro = addslashes($_POST['bairro']);
			$rua = addslashes($_POST['rua']);
			$cpf = addslashes($_POST['cpf']);
			$salario = addslashes($_POST['salario']);
			$user = new Employees();
			$user->editar($id, $nome, $cpf, $rua, $bairro, $cidade, $salario);
			header("Location: ".BASE_URL."employees");
				
		}
				
	}

			

				
			

	


?>