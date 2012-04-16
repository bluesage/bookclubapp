<div class="clubsMembers view">
<h2><?php  echo __('Clubs Member');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clubsMember['ClubsMember']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club Id'); ?></dt>
		<dd>
			<?php echo h($clubsMember['ClubsMember']['club_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member Id'); ?></dt>
		<dd>
			<?php echo h($clubsMember['ClubsMember']['member_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clubs Member'), array('action' => 'edit', $clubsMember['ClubsMember']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clubs Member'), array('action' => 'delete', $clubsMember['ClubsMember']['id']), null, __('Are you sure you want to delete # %s?', $clubsMember['ClubsMember']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clubs Member'), array('action' => 'add')); ?> </li>
	</ul>
</div>
