<div class="row">
	<div class="col-md-12">	
		<h2 class="text-center">Entrar no aplicativo</h2>
		<hr>


		<?php echo $this->Form->create("User"); ?>

		<div class="row">
			<div class="col-md-6">
				<?php echo $this->Form->input("username", array('div' => 'form-group', 'class' => 'form-control', 'label' => 'Usuário (ou e-mail)') ); ?>
			</div>
			<div class="col-md-6">
				<?php echo $this->Form->input("password", array('div' => 'form-group', 'class' => 'form-control', 'label' => 'Senha') ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<button type="submit" class="btn btn-lg btn-success btn-block">Entrar</button>
				</div>
				<div class="form-group">
				<a href="<?php echo $this->Html->url( array('controller' => 'users', 'action' => 'add') ); ?>" class="btn btn-lg btn-default btn-block">Fazer Cadastro</a>
				</div>
			</div>
		</div>

	</div>
</div>