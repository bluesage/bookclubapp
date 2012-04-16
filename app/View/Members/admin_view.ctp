<div class="members view">
<h2><?php  echo __('Member');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['other_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Email'); ?></dt>
		<dd>
			<?php echo h($member['Member']['primary_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Email'); ?></dt>
		<dd>
			<?php echo h($member['Member']['secondary_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Street Address'); ?></dt>
		<dd>
			<?php echo h($member['Member']['home_street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home City'); ?></dt>
		<dd>
			<?php echo h($member['Member']['home_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($member['Member']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Zip'); ?></dt>
		<dd>
			<?php echo h($member['Member']['home_zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Street Address'); ?></dt>
		<dd>
			<?php echo h($member['Member']['work_street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work City'); ?></dt>
		<dd>
			<?php echo h($member['Member']['work_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Zip'); ?></dt>
		<dd>
			<?php echo h($member['Member']['work_zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['home_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['work_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['cell_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($member['Member']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($member['Member']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($member['Member']['delete_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Email Members'), array('controller' => 'email_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Member'), array('controller' => 'email_members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Email Members');?></h3>
	<?php if (!empty($member['EmailMember'])):?>
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
		foreach ($member['EmailMember'] as $emailMember): ?>
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
<div class="related">
	<h3><?php echo __('Related Clubs');?></h3>
	<?php if (!empty($member['Club'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Club Name'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Club'] as $club): ?>
		<tr>
			<td><?php echo $club['id'];?></td>
			<td><?php echo $club['club_name'];?></td>
			<td><?php echo $club['create_date'];?></td>
			<td><?php echo $club['update_date'];?></td>
			<td><?php echo $club['delete_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clubs', 'action' => 'view', $club['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clubs', 'action' => 'edit', $club['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clubs', 'action' => 'delete', $club['id']), null, __('Are you sure you want to delete # %s?', $club['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
