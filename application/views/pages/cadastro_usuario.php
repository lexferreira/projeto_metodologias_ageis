<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Dependencies -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/app.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/bootstrap/dist/css/bootstrap.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/app.js"></script>
    </head>
    <body>
	<div class="main">
	    <div class="header">
			<div class="header__logo">
				<img src="../img/icon.png">
			</div>
			<h2 class="header__title">Cadastro de usuario</h2>
			<div class="header__user">
				<div class="header__user__content">
					<img src="../img/user.png">
					<p class="header__user__text">Usuario <span><a href="">sair</a></span></p>
				</div>
			</div>
		</div>
		<div class="main__content">
			<div class="cadastro-usuario">
				<div class="main__content__menu">
					<ul class="menu__itens">
						<li class="menu__item"><a href="#">Usuario</a></li>
						<li class="menu__item"><a href="#">Vendas</a></li>
						<li class="menu__item"><a href="#">Clientes</a></li>
						<li class="menu__item"><a href="#">Medicamentos</a></li>
					</ul>
				</div>
				<div class="main__content--right">
					<form class=" main__content--right__form">
						<div class="form-group">
						    <input type="text" class="form-control" id="InputName" placeholder="Nome...">
						</div>
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Matricula...">
						</div>
						<div class="form-group">
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cpf...">
						</div>
						<div class="form-group">
						    <input type="numer" class="form-control" id="exampleInputEmail1" placeholder="Endereço...">
						</div>
						<div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Função...">
						</div>
		    			<div class="form-group">
						    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Senha...">
						</div>
						<div class="form-group">
						    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Repetir a senha...">
						</div>
						<button type="submit" onclick="" class="btn btn-default">Cadastrar</button>
						<button type="button" onclick="" class="btn btn-default">Limpar</button>
						<ul>
							<li><?php print_r($usuarios); ?></li>
						</ul>

	    			</form>
				</div>
			</div>
		</div>
    </div>
    </body>
</html>
