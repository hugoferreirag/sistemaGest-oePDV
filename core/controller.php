<?php 

class controller {
	//função de carregar view // parametro nome da view
	public function loadView($viewName, $viewData = array()){
		// pega a array, fazendo com que sua chave vire uma variavel e seu conteudo seu valor
		extract($viewData);
		// esta função da um require na pasta view, tem como parametro viewname que sera usado pelo controller, de acordo com a view desejada
		require 'views/'.$viewName.'.php';

	}
	// função para puxar template
	public function loadTemplate($viewName, $viewData = array()){

		require 'views/template.php';
	}
	public function loadTemplate2($viewName, $viewData = array()){

		require 'views/template2.php';
	}
	//função para puxar view dentro de template
	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
	
}

 ?>