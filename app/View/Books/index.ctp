<div class="books index">
	<h2><?php echo __('Books');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('author_id');?></th>
			<th><?php echo $this->Paginator->sort('publish_year');?></th>
			<th><?php echo $this->Paginator->sort('create_date');?></th>
			<th><?php echo $this->Paginator->sort('update_date');?></th>
			<th><?php echo $this->Paginator->sort('delete_date');?></th>
			<th><?php echo $this->Paginator->sort('summary');?></th>
			<th><?php echo $this->Paginator->sort('edition');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($book['Author']['last_name'], array('controller' => 'authors', 'action' => 'view', $book['Author']['id'])); ?>
		</td>
		<td><?php echo h($book['Book']['publish_year']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['create_date']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['delete_date']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['summary']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['edition']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
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
