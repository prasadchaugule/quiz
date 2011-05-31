<div class="questions index">
	<h2><?php __('Questions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question');?></th>
			<th><?php echo $this->Paginator->sort('skill_id');?></th>
			<th><?php echo $this->Paginator->sort('answer_type');?></th>
			<th><?php echo $this->Paginator->sort('points');?></th>
			<th><?php echo $this->Paginator->sort('negative_points');?></th>
			<th><?php echo $this->Paginator->sort('doc_status');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($questions as $question):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $question['Question']['id']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['question']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($question['Skill']['id'], array('controller' => 'skills', 'action' => 'view', $question['Skill']['id'])); ?>
		</td>
		<td><?php echo $question['Question']['answer_type']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['points']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['negative_points']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['doc_status']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['is_active']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['created']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $question['Question']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $question['Question']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $question['Question']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $question['Question']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Question', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Skills', true), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill', true), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answer Options', true), array('controller' => 'answer_options', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer Option', true), array('controller' => 'answer_options', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
	</ul>
</div>