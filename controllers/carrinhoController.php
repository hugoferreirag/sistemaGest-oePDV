<?php
Class  carrinhoController extends controller{
   
    public function index(){
        if(empty($_SESSION['vendor'])){
            header('Location: '.BASE_URL.'vender');
        }
        $dados = array();
        $clientes = new Clients();
        $dados['lista'] = $clientes->getAll();
        $produtos = new Products;
        $dados['produtos'] = $produtos->getAll();
        $clients = new Carrinho;
        $dados['client'] = $clients->getCar();
        $dadosCar = new Carrinho();
        $dados['lista'] = $dadosCar->getCar();
        $this->loadTemplate('carrinho', $dados);

    }
    public function carrinhoClient(){    
    
            $dados = array();
            if(!empty($_GET['id'])){
               $client = addslashes($_GET['id']);
               $saleClient = new Carrinho;
               $saleClient->setCar($client);
               

            }
   

    }
    
    public function carrinhoTemp(){
        
        $dados = array();
        if(!empty($_POST['id'])){
            if(!empty($_POST['quantidade'])){
                if(!empty($_POST['nomep'])){
                    if(!empty($_POST['preco'])){
                        if(!empty($_POST['arquivo'])){
           $id = $_POST['id'];
           $qtd = $_POST['quantidade'];
           $nomep = $_POST['nomep'];
           $preco = $_POST['preco'];
           $arquivo =$_POST['arquivo'];
           $temp = new Carrinho;
           $temp->insertTemp($id,$qtd,$nomep,$preco, $arquivo);
                        }
                    }
                }
            }
        }
    }
	public function emptySession(){
        $_SESSION['vendor'] = '';
        header('Location: '.BASE_URL.'vendas');
    }		
    public function emptyCart(){
       $client = new Carrinho;
       $client->deleteAll();
       $_SESSION['pQtd'] = 0;
       $_SESSION['vTotal'] = 0;
       header('Location: '.BASE_URL.'carrinho');
    }
    public function delete(){
        $id = $_GET['id'];
        $qtd = $_GET['qtd'];
        $sub = $_GET['sub'];
        $deletar = new Carrinho();
        $deletar->deletar($id);
        $_SESSION['pQtd'] -= $qtd ;
        $_SESSION['vTotal'] -= $sub ;
        
    }

    public function editProduct(){
        if(!empty($_POST['id'])){
            if(!empty($_POST['preco'])){
                if(!empty($_POST['quantidadeA'])){
                if(!empty($_POST['quantidadeN'])){
                    if(!empty($_POST['sub'])){
                        $id = $_POST['id'];
                        $preco = $_POST['preco'];
                        $qtdA = $_POST['quantidadeA'];
                        $qtdN = $_POST['quantidadeN'];
                        $sub = $_POST['sub'];
                        $edit = new Carrinho;
                        $edit->editProduct($id, $preco,$qtdA, $qtdN, $sub);
                        
                        header('Location: '.BASE_URL."carrinho");
                       }
                    }
                }
            }
        }
    }

    public function concluirVenda(){
        $concluir = new Carrinho;
        $concluir->concluirVenda();
        header('Location: '.BASE_URL.'vender');
    }
	}

			

				
			

	


?>