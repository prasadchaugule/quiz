<div class="answerOptions index">
	<h2><?php __('Answer Options');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('answer_option');?></th>
			<th><?php echo $this->Paginator->sort('is_correct');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($answerOptions as $answerOption):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $answerOption['AnswerOption']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($answerOption['Question']['id'], array('controller' => 'questions', 'action' => 'view', $answerOption['Question']['id'])); ?>
		</td>
		<td><?php echo $answerOption['AnswerOption']['answer_option']; ?>&nbsp;</td>
		<td><?php echo $answerOption['AnswerOption']['is_correct']; ?>&nbsp;</td>
		<td><?php echo $answerOption['AnswerOption']['created']; ?>&nbsp;</td>
		<td><?php echo $answerOption['AnswerOption']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $answerOption['AnswerOption']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $answerOption['AnswerOption']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $answerOption['AnswerOption']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $answerOption['AnswerOption']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Answer Option', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>