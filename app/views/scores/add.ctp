<div class="scores form">
<?php echo $this->Form->create('Score');?>
	<fieldset>
 		<legend><?php __('Add Score'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('total_points');
		echo $this->Form->input('score');
		echo $this->Form->input('percentile');
		echo $this->Form->input('positive_score');
		echo $this->Form->input('negative_score');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Scores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>