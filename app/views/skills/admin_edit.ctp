<div class="skills form">
<?php echo $this->Form->create('Skill');?>
	<fieldset>
 		<legend><?php __('Admin Edit Skill'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('skill');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Skill.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Skill.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Skills', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>