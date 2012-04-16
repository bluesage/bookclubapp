<div class="readings view">
<h2><?php  echo __('Reading');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reading['Reading']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reading['Club']['club_name'], array('controller' => 'clubs', 'action' => 'view', $reading['Club']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reading['Book']['title'], array('controller' => 'books', 'action' => 'view', $reading['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($reading['Reading']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($reading['Reading']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($reading['Reading']['delete_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Page'); ?></dt>
		<dd>
			<?php echo h($reading['Reading']['from_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Page'); ?></dt>
		<dd>
			<?php echo h($reading['Reading']['to_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Chapter'); ?></dt>
		<dd>
			<?php echo h($reading['Reading']['from_chapter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Chapter'); ?></dt>
		<dd>
			<?php echo h($reading['Reading']['to_chapter']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reading'), array('action' => 'edit', $reading['Reading']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reading'), array('action' => 'delete', $reading['Reading']['id']), null, __('Are you sure you want to delete # %s?', $reading['Reading']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Readings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reading'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Meetings');?></h3>
	<?php if (!empty($reading['Meeting'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Datetime'); ?></th>
		<th><?php echo __('Reading Id'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reading['Meeting'] as $meeting): ?>
		<tr>
			<td><?php echo $meeting['id'];?></td>
			<td><?php echo $meeting['location_id'];?></td>
			<td><?php echo $meeting['datetime'];?></td>
			<td><?php echo $meeting['reading_id'];?></td>
			<td><?php echo $meeting['create_date'];?></td>
			<td><?php echo $meeting['update_date'];?></td>
			<td><?php echo $meeting['delete_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meetings', 'action' => 'view', $meeting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meetings', 'action' => 'edit', $meeting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meetings', 'action' => 'delete', $meeting['id']), null, __('Are you sure you want to delete # %s?', $meeting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
