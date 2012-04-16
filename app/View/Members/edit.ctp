<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('other_name');
		echo $this->Form->input('primary_email');
		echo $this->Form->input('secondary_email');
		echo $this->Form->input('home_street_address');
		echo $this->Form->input('home_city');
		echo $this->Form->input('state');
		echo $this->Form->input('home_zip');
		echo $this->Form->input('work_street_address');
		echo $this->Form->input('work_city');
		echo $this->Form->input('work_zip');
		echo $this->Form->input('home_phone');
		echo $this->Form->input('work_phone');
		echo $this->Form->input('cell_phone');
		echo $this->Form->input('create_date');
		echo $this->Form->input('update_date');
		echo $this->Form->input('delete_date');
		echo $this->Form->input('Club');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Email Members'), array('controller' => 'email_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Member'), array('controller' => 'email_members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
