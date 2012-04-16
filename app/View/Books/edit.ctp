<div class="books form">
<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php echo __('Edit Book'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('author_id');
		echo $this->Form->input('publish_year');
		echo $this->Form->input('create_date');
		echo $this->Form->input('update_date');
		echo $this->Form->input('delete_date');
		echo $this->Form->input('summary');
		echo $this->Form->input('edition');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Book.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Book.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Club Selections'), array('controller' => 'club_selections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club Selection'), array('controller' => 'club_selections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readings'), array('controller' => 'readings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reading'), array('controller' => 'readings', 'action' => 'add')); ?> </li>
	</ul>
</div>
