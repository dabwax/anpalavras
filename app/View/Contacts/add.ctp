<div class="row">
<?php echo $this->Form->create('Contact', array('class' => 'validate') ) ; ?>
	<fieldset>
		<legend><?php echo __('Fale Conosco Agora Mesmo'); ?></legend>
	<?php
		echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => AuthComponent::user('id')) );
		echo $this->Form->input('name', array('div' => 'form-group col-md-6', 'class' => 'form-control required', 'label' => 'Nome', 'value' => AuthComponent::user('name')) );
		echo $this->Form->input('email', array('div' => 'form-group col-md-6', 'class' => 'form-control required', 'label' => 'E-mail', 'value' => AuthComponent::user('username')) );
		echo $this->Form->input('message', array('div' => 'form-group col-md-12', 'class' => 'form-control required', 'label' => 'Mensagem') );
	?>
	<div class="col-md-12">
		<button class="btn btn-lg btn-success btn-block">Enviar Mensagem</button>
	</div>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>