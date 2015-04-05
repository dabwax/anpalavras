<div class="churches index">
	<h2><?php echo __('Mensagens'); ?> <a href="<?php echo $this->Html->url( array('action' => 'add') ); ?>" class="btn btn-success">Adicionar</a></h2>
	<hr>
	<table class="table">
	<thead>
	<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Data de Criação</th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($messages as $m): ?>
	<tr>
		<td><?php echo h($m['Message']['id']); ?>&nbsp;</td>
		<td><?php echo h($m['Message']['title']); ?>&nbsp;</td>
		<td><?php echo h($m['Message']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $m['Message']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $m['Message']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $m['Message']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>