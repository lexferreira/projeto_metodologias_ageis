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
					<?= form_open('index.php/Usuario_controller/adicionar')  ?>
					<form class="container" id="form_cadastro_usuario" method="post">
					<h2><?php echo $message ?></h2>
						<div class="form-group">
						    <input type="text" 
						    class="form-control" 
						    name="nome" 
						    id="nome" 
						    placeholder="Nome..."
						    value="<?= set_value('nome') ? : (isset($nome) ? $nome : '') ?>"
						>
						    <span class="erro"><?php echo form_error('nome') ?  : ''; ?></span>
						</div>
						<div class="form-group">
						    <input 
						    type="text" 
						    class="form-control" 
						    name="matricula" 
						    id="matricula" 
						    placeholder="Matricula..."
						    value="<?= set_value('matricula') ? : (isset($matricula) ? $matricula : '') ?>"
						>
						    <span class="erro"><?php echo form_error('matricula') ?  : ''; ?></span>
						</div>
						<div class="form-group">
						    <input 
							    type="text" 
							    class="form-control" 
							    name="cpf" 
							    id="cpf" 
							    placeholder="Cpf..."
							    value="<?= set_value('cpf') ? : (isset($cpf) ? $cpf : '') ?>"
							>
						    <span class="erro"><?php echo form_error('cpf') ?  : ''; ?></span>
						</div>
						<div class="form-group">
						    <input 
							    type="text" 
							    class="form-control" 
							    name="endereco" 
							    id="endereco" 
							    placeholder="Endereço..."
							    value="<?= set_value('endereco') ? : (isset($endereco) ? $endereco : '') ?>"
							>
						    <span class="erro"><?php echo form_error('endereco') ?  : ''; ?></span>
						</div>
						<div class="form-group">
						    <input 
							    type="text" 
							    class="form-control" 
							    name="funcao" 
							    id="funcao" 
							    placeholder="Função..."
							    value="<?= set_value('funcao') ? : (isset($funcao) ? $funcao : '') ?>"
							>
						    <span class="erro"><?php echo form_error('funcao') ?  : ''; ?></span>
						</div>
		    			<div class="form-group">
						    <input 
							    type="password" 
							    class="form-control" 
							    name="senha" 
							    id="senha" 
							    placeholder="Senha..."
							>
						    <span class="erro"><?php echo form_error('senha') ?  : ''; ?></span>
						</div>
						<div class="form-group">
						    <input 
							    type="password" 
							    class="form-control" 
							    name="senha_" 
							    id="senha_" 
							    placeholder="Repetir a senha..."
						    >
						    <span class="erro"><?php echo form_error('senha_') ?  : ''; ?></span>
						</div>
						<input 
						    type='hidden' 
						    id="id" 
						    name="id" 
						    value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>"
					    >
						<input type="submit" class="btn btn-default" value="Cadastrar"/>
	    			</form>
	    			<?= form_close(); ?>
				</div>
			</div>
		</div>
    </div>
    </body>
</html>
