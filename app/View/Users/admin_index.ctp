<div class="users index">
	<h2><?php echo __('Usuários'); ?></h2>
	<hr>
	<table class="table">
	<thead>
	<tr>
			<th>#</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Data de Aniversário</th>
			<th>Igreja</th>
			<th>Sexo</th>
			<th>Estado Civil</th>
			<th>Cidade</th>
			<th>UF</th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($user['Church']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['sex']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['civil_status']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['uf']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>