<div class="clubSelections view">
<h2><?php  echo __('Club Selection');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clubSelection['ClubSelection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clubSelection['Club']['club_name'], array('controller' => 'clubs', 'action' => 'view', $clubSelection['Club']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clubSelection['Book']['title'], array('controller' => 'books', 'action' => 'view', $clubSelection['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($clubSelection['ClubSelection']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($clubSelection['ClubSelection']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($clubSelection['ClubSelection']['delete_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($clubSelection['ClubSelection']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finish Date'); ?></dt>
		<dd>
			<?php echo h($clubSelection['ClubSelection']['finish_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Club Selection'), array('action' => 'edit', $clubSelection['ClubSelection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Club Selection'), array('action' => 'delete', $clubSelection['ClubSelection']['id']), null, __('Are you sure you want to delete # %s?', $clubSelection['ClubSelection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Club Selections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club Selection'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
