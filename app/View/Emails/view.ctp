<div class="emails view">
<h2><?php  echo __('Email');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($email['Email']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($email['Club']['club_name'], array('controller' => 'clubs', 'action' => 'view', $email['Club']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($email['Book']['title'], array('controller' => 'books', 'action' => 'view', $email['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($email['Meeting']['datetime'], array('controller' => 'meetings', 'action' => 'view', $email['Meeting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($email['Email']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Greeting'); ?></dt>
		<dd>
			<?php echo h($email['Email']['greeting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($email['Email']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing'); ?></dt>
		<dd>
			<?php echo h($email['Email']['closing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($email['Email']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($email['Email']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($email['Email']['delete_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sent Date'); ?></dt>
		<dd>
			<?php echo h($email['Email']['sent_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Email'), array('action' => 'edit', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Email'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Email Members');?></h3>
	<?php if (!empty($email['EmailMember'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email Id'); ?></th>
		<th><?php echo __('Member Id'); ?></th>
		<th><?php echo __('Sent'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($email['EmailMember'] as $emailMember): ?>
		<tr>
			<td><?php echo $emailMember['id'];?></td>
			<td><?php echo $emailMember['email_id'];?></td>
			<td><?php echo $emailMember['member_id'];?></td>
			<td><?php echo $emailMember['sent'];?></td>
			<td><?php echo $emailMember['create_date'];?></td>
			<td><?php echo $emailMember['update_date'];?></td>
			<td><?php echo $emailMember['delete_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'email_members', 'action' => 'view', $emailMember['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'email_members', 'action' => 'edit', $emailMember['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'email_members', 'action' => 'delete', $emailMember['id']), null, __('Are you sure you want to delete # %s?', $emailMember['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email Member'), array('controller' => 'email_members', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
