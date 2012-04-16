<div class="clubsMembers form">
<?php echo $this->Form->create('ClubsMember');?>
	<fieldset>
		<legend><?php echo __('Edit Clubs Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('club_id');
		echo $this->Form->input('member_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClubsMember.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClubsMember.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clubs Members'), array('action' => 'index'));?></li>
	</ul>
</div>
