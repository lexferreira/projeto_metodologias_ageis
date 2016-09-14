
	<div class="cadastro-usuario">
		<div class="main__content--right">
			<?= form_open('index.php/Usuario_controller/adicionar')  ?>
			<form class="container" id="form_cadastro_usuario" method="post">
			<h2 class="title"><?php echo $message ?></h2>
				<label for="nome">Nome</label>
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
					<label for="nome">Matricula</label>
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
					<label for="nome">CPF</label>
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
					<label for="nome">Endereço</label>
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
					<label for="nome">Função</label>
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
    				<label for="nome">Senha</label>
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
					<label for="nome">Repetir a senha</label>
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
