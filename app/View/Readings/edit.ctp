<div class="readings form">
<?php echo $this->Form->create('Reading');?>
	<fieldset>
		<legend><?php echo __('Edit Reading'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('club_id');
		echo $this->Form->input('book_id');
		echo $this->Form->input('create_date');
		echo $this->Form->input('update_date');
		echo $this->Form->input('delete_date');
		echo $this->Form->input('from_page');
		echo $this->Form->input('to_page');
		echo $this->Form->input('from_chapter');
		echo $this->Form->input('to_chapter');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reading.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Reading.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Readings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
