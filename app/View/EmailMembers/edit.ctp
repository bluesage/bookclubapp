<div class="emailMembers form">
<?php echo $this->Form->create('EmailMember');?>
	<fieldset>
		<legend><?php echo __('Edit Email Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email_id');
		echo $this->Form->input('member_id');
		echo $this->Form->input('sent');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmailMember.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmailMember.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Email Members'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
