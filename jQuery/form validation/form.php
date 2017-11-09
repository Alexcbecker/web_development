<DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Document</title>
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="viewport" content="width=device, initialscale=1">
		<meta name="title" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container form">
			<div class="row">
				<div class="col-sm-0 col-md-0 col-lg-4">

				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 form-container">
					<div class="form-group">
						<label for="user">Usuário <span class="obrigatory">*</span></label>
						<input type="text" class="form-control" id="user">
					</div>
					<div class="form-group">
						<label for="pwd">Senha <span class="obrigatory">*</span></label>
						<input type="password" class="form-control" id="pwd">
					</div> 

					<div class="form-group">
						<label for="checkbox">Que frutas você come?</label>
						<div class="checkbox">
							<label><input type="checkbox" value="">Maçã</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Banana</label>
						</div>
						<div class="checkbox disabled">
							<label><input type="checkbox" value="" disabled>Tomate</label>
						</div> 
					</div> 

					<div class="form-group">
						<label for="checkbox">Gosta de batata?</label>
						<div class="radio">
							<label><input type="radio" name="optradio">Sim</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio">Não</label>
						</div>
						<div class="radio disabled">
							<label><input type="radio" name="optradio" disabled>As vezes</label>
						</div> 
					</div> 

					<div class="form-group">
						<label for="drinks">Selecione uma bebida</label>
						<select class="form-control" id="drinks">
							<option>Selecione</option>
							<option>Fanta</option>
							<option>Sprite</option>
							<option>Guaraná</option>
							<option>Pepsi</option>
						</select>
					</div>

					<div class="form-group">
						<label for="msn">Nos deixe uma mensagem</label>
						<textarea class="form-control" id="msn"></textarea>
					</div> 
					<div class="row">
						<div class="col-sm-0  col-md-0 col-lg-4">
							<button type="button" id="sendData" class="btn btn-secondary ct" data-toggle="modal" data-target="#modalErro">Enviar dados</button>
						</div>
						<div class="col-md-6">
							<button type="button" id="resetData" class="btn btn-secondary ct">Limpar</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">

				</div>
			</div>
		</div>	
		<div class="modal fade hide" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="modalErroTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title ct" id="exampleModalLongTitle"><b>Erro!</b></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<div class="modal-body">
						<p class="ct">Por favor, preencha todos os campos antes de continuar.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary ct" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</body>
	</html>
