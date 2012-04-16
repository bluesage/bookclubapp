<div class="readings index">
	<h2><?php echo __('Readings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('club_id');?></th>
			<th><?php echo $this->Paginator->sort('book_id');?></th>
			<th><?php echo $this->Paginator->sort('create_date');?></th>
			<th><?php echo $this->Paginator->sort('update_date');?></th>
			<th><?php echo $this->Paginator->sort('delete_date');?></th>
			<th><?php echo $this->Paginator->sort('from_page');?></th>
			<th><?php echo $this->Paginator->sort('to_page');?></th>
			<th><?php echo $this->Paginator->sort('from_chapter');?></th>
			<th><?php echo $this->Paginator->sort('to_chapter');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($readings as $reading): ?>
	<tr>
		<td><?php echo h($reading['Reading']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reading['Club']['club_name'], array('controller' => 'clubs', 'action' => 'view', $reading['Club']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reading['Book']['title'], array('controller' => 'books', 'action' => 'view', $reading['Book']['id'])); ?>
		</td>
		<td><?php echo h($reading['Reading']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($reading['Reading']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($reading['Reading']['delete_date']); ?>&nbsp;</td>
		<td><?php echo h($reading['Reading']['from_page']); ?>&nbsp;</td>
		<td><?php echo h($reading['Reading']['to_page']); ?>&nbsp;</td>
		<td><?php echo h($reading['Reading']['from_chapter']); ?>&nbsp;</td>
		<td><?php echo h($reading['Reading']['to_chapter']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reading['Reading']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reading['Reading']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reading['Reading']['id']), null, __('Are you sure you want to delete # %s?', $reading['Reading']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reading'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
