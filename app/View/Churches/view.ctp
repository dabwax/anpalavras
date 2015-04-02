<div class="churches view">
<h2><?php echo __('Church'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($church['Church']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($church['Church']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($church['Church']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($church['Church']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($church['Church']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Church'), array('action' => 'edit', $church['Church']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Church'), array('action' => 'delete', $church['Church']['id']), array(), __('Are you sure you want to delete # %s?', $church['Church']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Churches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Church'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($church['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Church Id'); ?></th>
		<th><?php echo __('Facebook Id'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Civil Status'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Uf'); ?></th>
		<th><?php echo __('Last Login'); ?></th>
		<th><?php echo __('Login Count'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($church['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['date_of_birth']; ?></td>
			<td><?php echo $user['church_id']; ?></td>
			<td><?php echo $user['facebook_id']; ?></td>
			<td><?php echo $user['sex']; ?></td>
			<td><?php echo $user['civil_status']; ?></td>
			<td><?php echo $user['city']; ?></td>
			<td><?php echo $user['uf']; ?></td>
			<td><?php echo $user['last_login']; ?></td>
			<td><?php echo $user['login_count']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
