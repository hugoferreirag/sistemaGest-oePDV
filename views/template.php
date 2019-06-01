<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css  ">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script
  src="<?php echo BASE_URL?>assets/js/jquery-3.3.1.js"></script>
  <script src="<?php echo BASE_URL ?>assets/js/ajax.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
<script type="text/javascript" src="<?php echo BAS_URL?>assets/js/clientTableScript.js"></script>

</head>
<body>
	<nav class="menutp row">
    
    <div class="col-md-7"> <img class="" src="<?php echo BASE_URL;?>assets/images/fersoft.png" alt="" width="100px;"></div>
      <ul class="col-md-5">
        <a href="<?php echo BASE_URL?>users"><li>Usuários</li></a>
        <a href="<?php echo BASE_URL?>notifications"><li>Notificações</li></a>
        <a href="<?php echo BASE_URL?>lembretes"><li>Lembretes</li></a>
        
      </ul>
  
  </nav>
<div class="row">
<div class="col-md-2 menuLt">
  <div class="menuL">
  <a class="icona activedash" href="<?php echo BASE_URL; ?>"><div class="icon activedash"><img src="<?php echo BASE_URL; ?>assets/images/dash.png" alt="" width="30px"> DashBoard</a><br> </div>
  <a class="icona activehome" href="<?php echo BASE_URL; ?>clientes"><div class="icon activehome"><img src="<?php echo BASE_URL; ?>assets/images/clienticon.png" alt="" width="30px"> Clientes</a><br> </div>
  <a class="icona activeemplo" href="<?php echo BASE_URL; ?>employees "><div class="icon activeemplo"><img src="<?php echo BASE_URL; ?>assets/images/employeesicon.png" alt="" width="30px"> Funcionários</a><br> </div>
  <a class="icona activeestoque" href="<?php echo BASE_URL; ?>products "><div class="icon activeestoque"><img src="<?php echo BASE_URL; ?>assets/images/estoqueicon.png" alt="" width="30px"> Estoque</a><br> </div>
  <a class="icona activetransi" href="<?php echo BASE_URL; ?>vendas "><div class="icon activetransi"><img src="<?php echo BASE_URL; ?>assets/images/transitionsicon.png" alt="" width="30px"> Vendas/Notas</a><br> </div>
  <a class="icona activevendor" href="<?php echo BASE_URL; ?>vender "><div class="icon activevendor"><img src="<?php echo BASE_URL; ?>assets/images/vendasicon.png" alt="" width="30px"> Vender</a><br> </div>


  </div>
</div>
<script>
$('.icon').bind('mouseover',function(){
  $(this).css("background-color",'rgb(226, 220, 220)');

});
$('.icon').bind('mouseout',function(){
  $(this).css("background-color",'transparent');

});
$('.icona').bind('mouseover',function(){
  $(this).css("color",'black');

});
$('.icona').bind('mouseout',function(){
  $(this).css("color",'white');


});


</script>
      
  
<div class="col-md-9 corpo"> 
<?php $this->loadViewInTemplate($viewName, $viewData); ?>

</div>
</div>
<footer>	
	<div class="container">	
	<div class="row col-md-12">	
<div class="col-md-6">
<h5>Copyright ® <a href="http://fersoftsolutions.com.br">FerSoft Solutions</a> 2019</h5></div>
<div class="col-md-6">	
  <h6>System ERP v1.0</h6>
</div>
</div>
</div>
</footer>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/ajax.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>assets/js/scripts.js"></script>

</body>
</html>
