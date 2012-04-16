<div class="clubs view">
<h2><?php  echo __('Club');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($club['Club']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club Name'); ?></dt>
		<dd>
			<?php echo h($club['Club']['club_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($club['Club']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($club['Club']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($club['Club']['delete_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Club'), array('action' => 'edit', $club['Club']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Club'), array('action' => 'delete', $club['Club']['id']), null, __('Are you sure you want to delete # %s?', $club['Club']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Club Meetings'), array('controller' => 'club_meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club Meeting'), array('controller' => 'club_meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Club Selections'), array('controller' => 'club_selections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club Selection'), array('controller' => 'club_selections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readings'), array('controller' => 'readings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reading'), array('controller' => 'readings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Club Meetings');?></h3>
	<?php if (!empty($club['ClubMeeting'])):?>
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
		foreach ($club['ClubMeeting'] as $clubMeeting): ?>
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
	<h3><?php echo __('Related Club Selections');?></h3>
	<?php if (!empty($club['ClubSelection'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Club Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Finish Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($club['ClubSelection'] as $clubSelection): ?>
		<tr>
			<td><?php echo $clubSelection['id'];?></td>
			<td><?php echo $clubSelection['club_id'];?></td>
			<td><?php echo $clubSelection['book_id'];?></td>
			<td><?php echo $clubSelection['create_date'];?></td>
			<td><?php echo $clubSelection['update_date'];?></td>
			<td><?php echo $clubSelection['delete_date'];?></td>
			<td><?php echo $clubSelection['start_date'];?></td>
			<td><?php echo $clubSelection['finish_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'club_selections', 'action' => 'view', $clubSelection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'club_selections', 'action' => 'edit', $clubSelection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'club_selections', 'action' => 'delete', $clubSelection['id']), null, __('Are you sure you want to delete # %s?', $clubSelection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Club Selection'), array('controller' => 'club_selections', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($club['Email'])):?>
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
		foreach ($club['Email'] as $email): ?>
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
<div class="related">
	<h3><?php echo __('Related Readings');?></h3>
	<?php if (!empty($club['Reading'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Club Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th><?php echo __('From Page'); ?></th>
		<th><?php echo __('To Page'); ?></th>
		<th><?php echo __('From Chapter'); ?></th>
		<th><?php echo __('To Chapter'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($club['Reading'] as $reading): ?>
		<tr>
			<td><?php echo $reading['id'];?></td>
			<td><?php echo $reading['club_id'];?></td>
			<td><?php echo $reading['book_id'];?></td>
			<td><?php echo $reading['create_date'];?></td>
			<td><?php echo $reading['update_date'];?></td>
			<td><?php echo $reading['delete_date'];?></td>
			<td><?php echo $reading['from_page'];?></td>
			<td><?php echo $reading['to_page'];?></td>
			<td><?php echo $reading['from_chapter'];?></td>
			<td><?php echo $reading['to_chapter'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'readings', 'action' => 'view', $reading['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'readings', 'action' => 'edit', $reading['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'readings', 'action' => 'delete', $reading['id']), null, __('Are you sure you want to delete # %s?', $reading['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reading'), array('controller' => 'readings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Members');?></h3>
	<?php if (!empty($club['Member'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Other Name'); ?></th>
		<th><?php echo __('Primary Email'); ?></th>
		<th><?php echo __('Secondary Email'); ?></th>
		<th><?php echo __('Home Street Address'); ?></th>
		<th><?php echo __('Home City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Home Zip'); ?></th>
		<th><?php echo __('Work Street Address'); ?></th>
		<th><?php echo __('Work City'); ?></th>
		<th><?php echo __('Work Zip'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Work Phone'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($club['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id'];?></td>
			<td><?php echo $member['last_name'];?></td>
			<td><?php echo $member['first_name'];?></td>
			<td><?php echo $member['other_name'];?></td>
			<td><?php echo $member['primary_email'];?></td>
			<td><?php echo $member['secondary_email'];?></td>
			<td><?php echo $member['home_street_address'];?></td>
			<td><?php echo $member['home_city'];?></td>
			<td><?php echo $member['state'];?></td>
			<td><?php echo $member['home_zip'];?></td>
			<td><?php echo $member['work_street_address'];?></td>
			<td><?php echo $member['work_city'];?></td>
			<td><?php echo $member['work_zip'];?></td>
			<td><?php echo $member['home_phone'];?></td>
			<td><?php echo $member['work_phone'];?></td>
			<td><?php echo $member['cell_phone'];?></td>
			<td><?php echo $member['create_date'];?></td>
			<td><?php echo $member['update_date'];?></td>
			<td><?php echo $member['delete_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
