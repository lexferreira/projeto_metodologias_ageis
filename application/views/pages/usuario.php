<div class="cadastro-usuario">
	<div class="main__content--right">
		<div class="row">
			<table class="table table-hover col-sm-4 cadastro-usuario__table">
			    <thead>
			      <tr>
			        <th>Matricula</th>
			        <th>Nome</th>
			        <th>Cpf</th>
			        <th>Endereço</th>
			        <th>Função</th>
			        <th>opção</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php foreach($usuarios as $usuario) { ?>
				    <tr class="clickable-row">
				    <td><?php echo $usuario['matricula'] ?></td>
				    <td><?php echo $usuario['nome'] ?></td>
				    <td><?php echo $usuario['CPF'] ?></td>
				    <td><?php echo $usuario['endereco'] ?></td>
				    <td><?php echo $usuario['funcao'] ?></td>
				    <td>
					    <a
					    	href="/index.php/usuario_controller/form_alterar/<?php echo $usuario['matricula'] ?>" 
					    	class="btn btn-default">
					     	alterar
					     </a>
					     <a
					    	href="/index.php/usuario_controller/delete/<?php echo $usuario['matricula'] ?>" 
					    	class="btn btn-default">
					     	deletar
					     </a>
				     </td>
				    </tr>
				 <?php } ?>
			    </tbody>
		  	</table>
  			<a href="/index.php/usuario_controller/form" class="btn btn-default">inserir</a>
		</div>
	</div>
</div>
