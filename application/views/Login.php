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