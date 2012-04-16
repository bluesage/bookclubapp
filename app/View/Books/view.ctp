<div class="books view">
<h2><?php  echo __('Book');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($book['Book']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Author']['last_name'], array('controller' => 'authors', 'action' => 'view', $book['Author']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publish Year'); ?></dt>
		<dd>
			<?php echo h($book['Book']['publish_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($book['Book']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($book['Book']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($book['Book']['delete_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($book['Book']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edition'); ?></dt>
		<dd>
			<?php echo h($book['Book']['edition']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Club Selections');?></h3>
	<?php if (!empty($book['ClubSelection'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Club Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Finish Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($book['ClubSelection'] as $clubSelection): ?>
		<tr>
			<td><?php echo $clubSelection['id'];?></td>
			<td><?php echo $clubSelection['club_id'];?></td>
			<td><?php echo $clubSelection['book_id'];?></td>
			<td><?php echo $clubSelection['create_date'];?></td>
			<td><?php echo $clubSelection['update_date'];?></td>
			<td><?php echo $clubSelection['delete_date'];?></td>
			<td><?php echo $clubSelection['start_date'];?></td>
			<td><?php echo $clubSelection['finish_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'club_selections', 'action' => 'view', $clubSelection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'club_selections', 'action' => 'edit', $clubSelection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'club_selections', 'action' => 'delete', $clubSelection['id']), null, __('Are you sure you want to delete # %s?', $clubSelection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Club Selection'), array('controller' => 'club_selections', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($book['Email'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Club Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Meeting Id'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Greeting'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Closing'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th><?php echo __('Sent Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($book['Email'] as $email): ?>
		<tr>
			<td><?php echo $email['id'];?></td>
			<td><?php echo $email['club_id'];?></td>
			<td><?php echo $email['book_id'];?></td>
			<td><?php echo $email['meeting_id'];?></td>
			<td><?php echo $email['subject'];?></td>
			<td><?php echo $email['greeting'];?></td>
			<td><?php echo $email['body'];?></td>
			<td><?php echo $email['closing'];?></td>
			<td><?php echo $email['create_date'];?></td>
			<td><?php echo $email['update_date'];?></td>
			<td><?php echo $email['delete_date'];?></td>
			<td><?php echo $email['sent_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emails', 'action' => 'view', $email['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $email['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $email['id']), null, __('Are you sure you want to delete # %s?', $email['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Readings');?></h3>
	<?php if (!empty($book['Reading'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Club Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th><?php echo __('From Page'); ?></th>
		<th><?php echo __('To Page'); ?></th>
		<th><?php echo __('From Chapter'); ?></th>
		<th><?php echo __('To Chapter'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($book['Reading'] as $reading): ?>
		<tr>
			<td><?php echo $reading['id'];?></td>
			<td><?php echo $reading['club_id'];?></td>
			<td><?php echo $reading['book_id'];?></td>
			<td><?php echo $reading['create_date'];?></td>
			<td><?php echo $reading['update_date'];?></td>
			<td><?php echo $reading['delete_date'];?></td>
			<td><?php echo $reading['from_page'];?></td>
			<td><?php echo $reading['to_page'];?></td>
			<td><?php echo $reading['from_chapter'];?></td>
			<td><?php echo $reading['to_chapter'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'readings', 'action' => 'view', $reading['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'readings', 'action' => 'edit', $reading['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'readings', 'action' => 'delete', $reading['id']), null, __('Are you sure you want to delete # %s?', $reading['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reading'), array('controller' => 'readings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
