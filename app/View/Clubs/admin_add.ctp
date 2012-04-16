<div class="clubs form">
<?php echo $this->Form->create('Club');?>
	<fieldset>
		<legend><?php echo __('Admin Add Club'); ?></legend>
	<?php
		echo $this->Form->input('club_name');
		echo $this->Form->input('create_date');
		echo $this->Form->input('update_date');
		echo $this->Form->input('delete_date');
		echo $this->Form->input('Member');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clubs'), array('action' => 'index'));?></li>
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
