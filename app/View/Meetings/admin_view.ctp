<div class="meetings view">
<h2><?php  echo __('Meeting');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meeting['Location']['name'], array('controller' => 'locations', 'action' => 'view', $meeting['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datetime'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reading'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meeting['Reading']['book_id'], array('controller' => 'readings', 'action' => 'view', $meeting['Reading']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['delete_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meeting'), array('action' => 'edit', $meeting['Meeting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting'), array('action' => 'delete', $meeting['Meeting']['id']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Club Meetings');?></h3>
	<?php if (!empty($meeting['ClubMeeting'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Club Id'); ?></th>
		<th><?php echo __('Meeting Id'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($meeting['ClubMeeting'] as $clubMeeting): ?>
		<tr>
			<td><?php echo $clubMeeting['id'];?></td>
			<td><?php echo $clubMeeting['club_id'];?></td>
			<td><?php echo $clubMeeting['meeting_id'];?></td>
			<td><?php echo $clubMeeting['create_date'];?></td>
			<td><?php echo $clubMeeting['update_date'];?></td>
			<td><?php echo $clubMeeting['delete_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'club_meetings', 'action' => 'view', $clubMeeting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'club_meetings', 'action' => 'edit', $clubMeeting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'club_meetings', 'action' => 'delete', $clubMeeting['id']), null, __('Are you sure you want to delete # %s?', $clubMeeting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Club Meeting'), array('controller' => 'club_meetings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($meeting['Email'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Club Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Meeting Id'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Greeting'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Closing'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th><?php echo __('Sent Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($meeting['Email'] as $email): ?>
		<tr>
			<td><?php echo $email['id'];?></td>
			<td><?php echo $email['club_id'];?></td>
			<td><?php echo $email['book_id'];?></td>
			<td><?php echo $email['meeting_id'];?></td>
			<td><?php echo $email['subject'];?></td>
			<td><?php echo $email['greeting'];?></td>
			<td><?php echo $email['body'];?></td>
			<td><?php echo $email['closing'];?></td>
			<td><?php echo $email['create_date'];?></td>
			<td><?php echo $email['update_date'];?></td>
			<td><?php echo $email['delete_date'];?></td>
			<td><?php echo $email['sent_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emails', 'action' => 'view', $email['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $email['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $email['id']), null, __('Are you sure you want to delete # %s?', $email['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
