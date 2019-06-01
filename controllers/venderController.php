<?php
Class  venderController extends controller{
    public function index(){
       
        if(!empty($_SESSION['vendor'])){
            header('Location: '.BASE_URL.'carrinho');
            
        }else{
            $_SESSION['pQtd'] = 0 ;
            $_SESSION['vTotal'] = 0;
           $delete = new Carrinho;
           $delete->deleteAll();
        }
        $dados = array();
        $clientes = new Clients();
        $dados['lista'] = $clientes->getAll();
        $produtos = new Products;
        $dados['produtos'] = $produtos->getAll();
        $this->loadTemplate('vender', $dados);
    }
}

			

				
			

	


?>