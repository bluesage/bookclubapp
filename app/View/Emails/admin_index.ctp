<div class="emails index">
	<h2><?php echo __('Emails');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('club_id');?></th>
			<th><?php echo $this->Paginator->sort('book_id');?></th>
			<th><?php echo $this->Paginator->sort('meeting_id');?></th>
			<th><?php echo $this->Paginator->sort('subject');?></th>
			<th><?php echo $this->Paginator->sort('greeting');?></th>
			<th><?php echo $this->Paginator->sort('body');?></th>
			<th><?php echo $this->Paginator->sort('closing');?></th>
			<th><?php echo $this->Paginator->sort('create_date');?></th>
			<th><?php echo $this->Paginator->sort('update_date');?></th>
			<th><?php echo $this->Paginator->sort('delete_date');?></th>
			<th><?php echo $this->Paginator->sort('sent_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($emails as $email): ?>
	<tr>
		<td><?php echo h($email['Email']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($email['Club']['club_name'], array('controller' => 'clubs', 'action' => 'view', $email['Club']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($email['Book']['title'], array('controller' => 'books', 'action' => 'view', $email['Book']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($email['Meeting']['datetime'], array('controller' => 'meetings', 'action' => 'view', $email['Meeting']['id'])); ?>
		</td>
		<td><?php echo h($email['Email']['subject']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['greeting']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['body']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['closing']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['delete_date']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['sent_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $email['Email']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Email']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Email'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Email Members'), array('controller' => 'email_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Member'), array('controller' => 'email_members', 'action' => 'add')); ?> </li>
	</ul>
</div>
