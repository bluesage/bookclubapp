<div class="clubSelections index">
	<h2><?php echo __('Club Selections');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('club_id');?></th>
			<th><?php echo $this->Paginator->sort('book_id');?></th>
			<th><?php echo $this->Paginator->sort('create_date');?></th>
			<th><?php echo $this->Paginator->sort('update_date');?></th>
			<th><?php echo $this->Paginator->sort('delete_date');?></th>
			<th><?php echo $this->Paginator->sort('start_date');?></th>
			<th><?php echo $this->Paginator->sort('finish_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clubSelections as $clubSelection): ?>
	<tr>
		<td><?php echo h($clubSelection['ClubSelection']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clubSelection['Club']['club_name'], array('controller' => 'clubs', 'action' => 'view', $clubSelection['Club']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clubSelection['Book']['title'], array('controller' => 'books', 'action' => 'view', $clubSelection['Book']['id'])); ?>
		</td>
		<td><?php echo h($clubSelection['ClubSelection']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($clubSelection['ClubSelection']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($clubSelection['ClubSelection']['delete_date']); ?>&nbsp;</td>
		<td><?php echo h($clubSelection['ClubSelection']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($clubSelection['ClubSelection']['finish_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clubSelection['ClubSelection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clubSelection['ClubSelection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clubSelection['ClubSelection']['id']), null, __('Are you sure you want to delete # %s?', $clubSelection['ClubSelection']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Club Selection'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
