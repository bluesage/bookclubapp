<div class="authors form">
<?php echo $this->Form->create('Author');?>
	<fieldset>
		<legend><?php echo __('Add Author'); ?></legend>
	<?php
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('other_name');
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

		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
