<div class="clubSelections form">
<?php echo $this->Form->create('ClubSelection');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Club Selection'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('club_id');
		echo $this->Form->input('book_id');
		echo $this->Form->input('create_date');
		echo $this->Form->input('update_date');
		echo $this->Form->input('delete_date');
		echo $this->Form->input('start_date');
		echo $this->Form->input('finish_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClubSelection.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClubSelection.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Club Selections'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
