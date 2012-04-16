<div class="clubMeetings form">
<?php echo $this->Form->create('ClubMeeting');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Club Meeting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('club_id');
		echo $this->Form->input('meeting_id');
		echo $this->Form->input('create_date');
		echo $this->Form->input('update_date');
		echo $this->Form->input('delete_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClubMeeting.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClubMeeting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Club Meetings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
