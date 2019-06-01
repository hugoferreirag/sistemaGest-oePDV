<?php
Class  vendasController extends controller{
    public function index(){
       
       
        $dados = array();
        $vendor = new Vendas();
        $dados['lista'] = $vendor->getAll();
        $dados['lista2'] = $vendor->getAllv1();
    
        $this->loadTemplate('vendas', $dados);
    }
}

			

				
			

	


?>