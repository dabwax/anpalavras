<div class="churches form">
<?php echo $this->Form->create('Message'); ?>
	<fieldset>
		<legend><?php echo __('Add Message'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('church_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>