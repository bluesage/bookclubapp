<div class="clubsMembers form">
<?php echo $this->Form->create('ClubsMember');?>
	<fieldset>
		<legend><?php echo __('Add Clubs Member'); ?></legend>
	<?php
		echo $this->Form->input('club_id');
		echo $this->Form->input('member_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clubs Members'), array('action' => 'index'));?></li>
	</ul>
</div>
