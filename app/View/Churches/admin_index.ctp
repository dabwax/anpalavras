<div class="churches index">
	<h2><?php echo __('Igrejas'); ?> <a href="<?php echo $this->Html->url( array('action' => 'add') ); ?>" class="btn btn-success">Adicionar</a></h2>
	<hr>
	<table class="table">
	<thead>
	<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Site</th>
			<th>Data de Criação</th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($churches as $church): ?>
	<tr>
		<td><?php echo h($church['Church']['id']); ?>&nbsp;</td>
		<td><?php echo h($church['Church']['name']); ?>&nbsp;</td>
		<td><?php echo h($church['Church']['website']); ?>&nbsp;</td>
		<td><?php echo h($church['Church']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $church['Church']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $church['Church']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $church['Church']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>