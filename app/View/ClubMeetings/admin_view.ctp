<div class="clubMeetings view">
<h2><?php  echo __('Club Meeting');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clubMeeting['ClubMeeting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clubMeeting['Club']['club_name'], array('controller' => 'clubs', 'action' => 'view', $clubMeeting['Club']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clubMeeting['Meeting']['datetime'], array('controller' => 'meetings', 'action' => 'view', $clubMeeting['Meeting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($clubMeeting['ClubMeeting']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($clubMeeting['ClubMeeting']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($clubMeeting['ClubMeeting']['delete_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Club Meeting'), array('action' => 'edit', $clubMeeting['ClubMeeting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Club Meeting'), array('action' => 'delete', $clubMeeting['ClubMeeting']['id']), null, __('Are you sure you want to delete # %s?', $clubMeeting['ClubMeeting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Club Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club Meeting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
