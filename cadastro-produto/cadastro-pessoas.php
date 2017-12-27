<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Pessoas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>
<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Small modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" id="modal-tamanho" role="document">
    <div class="modal-content">
      <form class="form-horizontal">
			<fieldset>

			<!-- Formulario -->
			<h1>Cadastro de Pessoas</h1>

				<div class="col-md-12">
					<form>
			          <div class="form-group col-md-2 bg-branco">
			            <label for="recipient-name" class="control-label">Código</label>
			            <input name="idpfj" id="idpfj" type="number" class="form-control">
			          </div>
			          <div class="form-group col-md-5 bg-branco margin-left-col5">
			            <label for="recipient-name" class="control-label">CPF / CNPJ</label>
			            <input name="cpfcnpjpfj" id="cpfcnpjpfj" type="number" class="form-control">
			          </div>
			          <div class="form-group col-md-5 bg-branco margin-left-col5">
			            <label for="recipient-name" class="control-label">RG / Ins. Estadual</label>
			            <input name="inscricaopfj" id="inscricaopfj" type="number" class="form-control">
			          </div>
			          <div class="form-group col-md-12 bg-branco">
			            <label for="recipient-name" class="control-label">Nome</label>
			            <input name="nomepfj" id="nomepfj" type="text" class="form-control" >
			          </div>
			          <div class="form-group col-md-7 bg-branco">
			            <label for="recipient-name" class="control-label">Fantasia</label>
			            <input name="fantasiapfj" id="fantasiapfj" type="text" class="form-control" >
			          </div>
			          <div class="form-group col-md-5 bg-branco margin-left-col5">
			            <label for="recipient-name" class="control-label">Nasci. / Abert.</label>
			            <input name="nascimentopfj" id="nascimentopfj" type="date" class="form-control" >
			          </div>
			        </form>
			        <div class="col-md-12 tabela">
						<!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a class="nav-tab-title" href="#composicao" aria-controls="composicao" role="tab" data-toggle="tab">Composição</a></li>
					    <li role="presentation"><a class="nav-tab-title" href="#adicionais" aria-controls="adicionais" role="tab" data-toggle="tab">Adicionais</a></li>
					    <li role="presentation"><a class="nav-tab-title" href="#perfilTrib" aria-controls="perfilTrib" role="tab" data-toggle="tab">Perfil Trib.</a></li>
					    <li role="presentation"><a class="nav-tab-title" href="#promocao" aria-controls="promocao" role="tab" data-toggle="tab">Promoção</a></li>
					    <li role="presentation"><a class="nav-tab-title" href="#eventos" aria-controls="eventos" role="tab" data-toggle="tab">Eventos</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane tab-content active" id="composicao">Local da Tabela1</div>
					    <div role="tabpanel" class="tab-pane tab-content" id="adicionais">Local da Tabela2</div>
					    <div role="tabpanel" class="tab-pane tab-content" id="perfilTrib">Local da Tabela3</div>
					    <div role="tabpanel" class="tab-pane tab-content" id="promocao">Local da Tabela4</div>
					    <div role="tabpanel" class="tab-pane tab-content" id="eventos">Local da Tabela5</div>
					  </div>						
					</div>
				</div>
				<div class="botoes">
					<ul>
						<li><a id="combo" class="combo" href="#">COMBO</a></li>
						<li><a id="check" class="check" href="#"><i class="fa fa-check" aria-hidden="true"></i></a></li>
						<li><a id="eraser" class="eraser" href="#"><i class="fa fa-eraser" aria-hidden="true"></i></a></li>
						<li><a id="pencil" class="pencil" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
						<li><a id="plus" class="plus" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
						<li><a id="search" class="search" href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</fieldset>
		</form>
	   </div>
    </div>
  </div>
</div>
	<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--Link java script-->
	<script src="bootstrap/js/bootstrap.min.js"></script><!--Link biblioteca js do bootstrap-->
	<script src="js/mask.js"></script><!--Link biblioteca js do bootstrap-->
</body>
</html>