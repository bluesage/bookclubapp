<div class="members index">
	<h2><?php echo __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('other_name');?></th>
			<th><?php echo $this->Paginator->sort('primary_email');?></th>
			<th><?php echo $this->Paginator->sort('secondary_email');?></th>
			<th><?php echo $this->Paginator->sort('home_street_address');?></th>
			<th><?php echo $this->Paginator->sort('home_city');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('home_zip');?></th>
			<th><?php echo $this->Paginator->sort('work_street_address');?></th>
			<th><?php echo $this->Paginator->sort('work_city');?></th>
			<th><?php echo $this->Paginator->sort('work_zip');?></th>
			<th><?php echo $this->Paginator->sort('home_phone');?></th>
			<th><?php echo $this->Paginator->sort('work_phone');?></th>
			<th><?php echo $this->Paginator->sort('cell_phone');?></th>
			<th><?php echo $this->Paginator->sort('create_date');?></th>
			<th><?php echo $this->Paginator->sort('update_date');?></th>
			<th><?php echo $this->Paginator->sort('delete_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['other_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['primary_email']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['secondary_email']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['home_street_address']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['home_city']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['state']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['home_zip']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['work_street_address']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['work_city']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['work_zip']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['home_phone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['work_phone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['delete_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Email Members'), array('controller' => 'email_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Member'), array('controller' => 'email_members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
