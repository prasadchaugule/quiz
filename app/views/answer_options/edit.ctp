<div class="answerOptions form">
<?php echo $this->Form->create('AnswerOption');?>
	<fieldset>
 		<legend><?php __('Edit Answer Option'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('answer_option');
		echo $this->Form->input('is_correct');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AnswerOption.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AnswerOption.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Answer Options', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>