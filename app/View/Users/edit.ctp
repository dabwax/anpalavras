<div class="row">
<?php echo $this->Form->create('User', array('class' => 'validate') ) ; ?>
	<fieldset>
		<legend><?php echo __('Editar Minha Conta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('div' => 'form-group col-md-6', 'class' => 'form-control required', 'label' => 'Nome') );
		echo $this->Form->input('username', array('div' => 'form-group col-md-6', 'class' => 'form-control required', 'label' => 'E-mail', 'disabled' => true) );
		echo $this->Form->input('password', array('div' => 'form-group col-md-6', 'class' => 'form-control', 'label' => 'Senha', 'value' => '') );
		echo $this->Form->input('date_of_birth', array('div' => 'form-group col-md-6', 'class' => 'form-control datepicker required', 'label' => 'Data de Aniversário', 'type' => 'text') );
		echo $this->Form->input('church_id', array('div' => 'form-group col-md-6', 'class' => 'form-control required', 'label' => 'Igreja que você pertence', 'empty' => 'Selecionar') );
		echo $this->Form->input('sex', array('div' => 'form-group col-md-6', 'class' => 'form-control required', 'label' => 'Seu sexo', 'type' => 'select', 'options' => array('masculino' => 'Masculino', 'feminino' => 'Feminino') ) );
		echo $this->Form->input('civil_status', array('div' => 'form-group col-md-6', 'class' => 'form-control required', 'label' => 'Seu estado civil', 'type' => 'select', 'options' => array('solteiro' => 'Solteiro(a)', 'casado' => 'Casado(a)', 'viuvo' => 'Viúvo(a)') ) );
		echo $this->Form->input('city', array('div' => 'form-group col-md-4', 'class' => 'form-control required', 'label' => 'Cidade') );
		echo $this->Form->input('uf', array('div' => 'form-group col-md-2', 'class' => 'form-control required', 'label' => 'Estado (UF)') );
	?>
	<div class="col-md-12">
		<button class="btn btn-lg btn-success btn-block">Atualizar Meus Dados</button>
	</div>
	</fieldset>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
