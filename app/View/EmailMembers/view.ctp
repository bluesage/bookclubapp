<div class="emailMembers view">
<h2><?php  echo __('Email Member');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($emailMember['EmailMember']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailMember['Email']['subject'], array('controller' => 'emails', 'action' => 'view', $emailMember['Email']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emailMember['Member']['first_name'], array('controller' => 'members', 'action' => 'view', $emailMember['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sent'); ?></dt>
		<dd>
			<?php echo h($emailMember['EmailMember']['sent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($emailMember['EmailMember']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($emailMember['EmailMember']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Date'); ?></dt>
		<dd>
			<?php echo h($emailMember['EmailMember']['delete_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Email Member'), array('action' => 'edit', $emailMember['EmailMember']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Email Member'), array('action' => 'delete', $emailMember['EmailMember']['id']), null, __('Are you sure you want to delete # %s?', $emailMember['EmailMember']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Email Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
