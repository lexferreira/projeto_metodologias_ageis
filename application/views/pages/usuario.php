<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
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
			<h2 class="header__title"><?=$subTitle?></h2>
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
					<div class="container">
						<div class="row">
							<table class="table table-hover col-sm-4 cadastro-usuario__table">
							    <thead>
							      <tr>
							        <th>Matricula</th>
							        <th>Nome</th>
							        <th>Cpf</th>
							        <th>Endereço</th>
							        <th>Função</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php foreach($usuarios as $usuario) { ?>
								    <tr>
								    <td><?php echo $usuario['matricula'] ?></td>
								    <td><?php echo $usuario['nome'] ?></td>
								    <td><?php echo $usuario['CPF'] ?></td>
								    <td><?php echo $usuario['endereco'] ?></td>
								    <td><?php echo $usuario['funcao'] ?></td>
								    </tr>
								 <?php } ?>
							    </tbody>
						  	</table>
						  	<a href="/index.php/Usuario_controller/form" class="btn btn-default">inserir</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    </body>
</html>
