<div class="authors view">
<h2><?php  echo __('Author');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($author['Author']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($author['Author']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($author['Author']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Name'); ?></dt>
		<dd>
			<?php echo h($author['Author']['other_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($author['Author']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($author['Author']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($author['Author']['delete_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Author'), array('action' => 'edit', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Author'), array('action' => 'delete', $author['Author']['id']), null, __('Are you sure you want to delete # %s?', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Books');?></h3>
	<?php if (!empty($author['Book'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Author Id'); ?></th>
		<th><?php echo __('Publish Year'); ?></th>
		<th><?php echo __('Create Date'); ?></th>
		<th><?php echo __('Update Date'); ?></th>
		<th><?php echo __('Delete Date'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Edition'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($author['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id'];?></td>
			<td><?php echo $book['title'];?></td>
			<td><?php echo $book['author_id'];?></td>
			<td><?php echo $book['publish_year'];?></td>
			<td><?php echo $book['create_date'];?></td>
			<td><?php echo $book['update_date'];?></td>
			<td><?php echo $book['delete_date'];?></td>
			<td><?php echo $book['summary'];?></td>
			<td><?php echo $book['edition'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), null, __('Are you sure you want to delete # %s?', $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
