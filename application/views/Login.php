<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
         <title><?php echo $title;?></title>
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
				<img src="img/icon.png">
			</div>
			<h2 class="header__title">Login</h2>
			<div class="header__user">
				<div class="header__user__content">
					<img src="img/user.png">
					<p class="header__user__text">Usuario <span><a href="pages/venda.html">sair</a></span></p>
				</div>
			</div>
		</div>
		<div class="main__content login">
			<div class="container-fluid login__content">

			<?= form_open('index.php/login/logar')  ?>
    		<form id="form_login" method="post" class="login__content__form">
    			<h4>Seja Bem vindo!</h4>
    			<div class="form-group">
					<label for="matricula">Login</label><span class="erro"><?php echo form_error('matricula') ?  : ''; ?></span>
				    <input 
					    name="matricula" 
					    id="matricula" 
					    class="form-control" 
					    placeholder="Matricula"
					    value="<?= set_value('matricula') ? : (isset($matricula) ? $matricula : '') ?>"
				    >
				</div>
				<div class="form-group">
					<label for="senha">Senha</label><span class="erro"><?php echo form_error('senha') ?  : ''; ?></span>
				    <input 
					    name="senha" 
					    id="senha" 
					    type="password" 
					    class="form-control" 
					    placeholder="Senha"
				    >
				</div>
				<input type="submit" value="Login" class="btn btn-default btn-block"/>
    		</form>
    		<?= form_close(); ?>
    	</div>
		</div>
    </div>
    </body>
</html>
