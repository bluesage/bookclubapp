<div class="clubMeetings index">
	<h2><?php echo __('Club Meetings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('club_id');?></th>
			<th><?php echo $this->Paginator->sort('meeting_id');?></th>
			<th><?php echo $this->Paginator->sort('create_date');?></th>
			<th><?php echo $this->Paginator->sort('update_date');?></th>
			<th><?php echo $this->Paginator->sort('delete_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clubMeetings as $clubMeeting): ?>
	<tr>
		<td><?php echo h($clubMeeting['ClubMeeting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clubMeeting['Club']['club_name'], array('controller' => 'clubs', 'action' => 'view', $clubMeeting['Club']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clubMeeting['Meeting']['datetime'], array('controller' => 'meetings', 'action' => 'view', $clubMeeting['Meeting']['id'])); ?>
		</td>
		<td><?php echo h($clubMeeting['ClubMeeting']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($clubMeeting['ClubMeeting']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($clubMeeting['ClubMeeting']['delete_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clubMeeting['ClubMeeting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clubMeeting['ClubMeeting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clubMeeting['ClubMeeting']['id']), null, __('Are you sure you want to delete # %s?', $clubMeeting['ClubMeeting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Club Meeting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
