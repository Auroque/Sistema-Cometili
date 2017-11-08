<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>
<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Small modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document" id="modal-tamanho">
    <div class="modal-content">
      <form class="form-horizontal">
			<fieldset>

			<!-- Formulario -->
			<h1>Catalogo - Grupos</h1>

				<div class="col-md-12">
					<form>
			          <div class="form-group col-md-6 bg-branco">
			            <label for="recipient-name" class="control-label">ID da empresa</label>
			            <input name="idempgrc" id="idempgrc" type="number" class="form-control" id="recipient-name">
			          </div>
			          <div class="form-group col-md-6 bg-branco margin-left-col6">
			            <label for="recipient-name" class="control-label">ID do Grupo</label>
			            <input name="idgrugrc" id="idgrugrc" type="number" class="form-control" id="recipient-name">
			          </div>
			          <div class="form-group col-md-12 bg-branco">
			            <label for="recipient-name" class="control-label">Descrição de Grupo</label>
			            <input name="iddescgrc" id="iddescgrc" type="text" class="form-control" id="recipient-name" maxlength="40">
			          </div>
			          <div class="form-group col-md-6 bg-branco">
			            <label for="recipient-name" class="control-label">Ordem apresentação do Front-end</label>
			            <input name="ordemgrc" id="ordemgrc" type="number" class="form-control" id="recipient-name">
			          </div>
			          <div class="form-group col-md-3 bg-branco margin-left-col3 margin-left-col6">
			            <label for="recipient-name" class="control-label">Ordem apresentação cancelamento</label>
			            <input name="ordemcangrc" id="ordemcangrc" type="number" class="form-control" id="recipient-name">
			          </div>
			        </form>
				</div>
				<div class="botoes">
					<ul>
						<li><a id="check" class="check" href="#"><i class="fa fa-check" aria-hidden="true"></i></a></li>
						<li><a id="eraser" class="eraser" href="#"><i class="fa fa-eraser" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</fieldset>
		</form>
    </div>
  </div>
</div>
	<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--Link java script-->
	<script src="bootstrap/js/bootstrap.min.js"></script><!--Link biblioteca js do bootstrap-->
	<script src="js/mask.js"></script><!--Link biblioteca js do bootstrap-->
</body>
</html>