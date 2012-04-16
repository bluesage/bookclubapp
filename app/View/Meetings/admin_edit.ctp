<div class="meetings form">
<?php echo $this->Form->create('Meeting');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Meeting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('datetime');
		echo $this->Form->input('reading_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Meeting.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Meeting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index'));?></li>
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
