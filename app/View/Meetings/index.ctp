<div class="meetings index">
	<h2><?php echo __('Meetings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th><?php echo $this->Paginator->sort('datetime');?></th>
			<th><?php echo $this->Paginator->sort('reading_id');?></th>
			<th><?php echo $this->Paginator->sort('create_date');?></th>
			<th><?php echo $this->Paginator->sort('update_date');?></th>
			<th><?php echo $this->Paginator->sort('delete_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($meetings as $meeting): ?>
	<tr>
		<td><?php echo h($meeting['Meeting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meeting['Location']['name'], array('controller' => 'locations', 'action' => 'view', $meeting['Location']['id'])); ?>
		</td>
		<td><?php echo h($meeting['Meeting']['datetime']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meeting['Reading']['book_id'], array('controller' => 'readings', 'action' => 'view', $meeting['Reading']['id'])); ?>
		</td>
		<td><?php echo h($meeting['Meeting']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['delete_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meeting['Meeting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meeting['Meeting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meeting['Meeting']['id']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readings'), array('controller' => 'readings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reading'), array('controller' => 'readings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Club Meetings'), array('controller' => 'club_meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club Meeting'), array('controller' => 'club_meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
	</ul>
</div>
