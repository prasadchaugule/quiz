<div class="skills index">
	<h2><?php __('Skills');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('skill');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($skills as $skill):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $skill['Skill']['id']; ?>&nbsp;</td>
		<td><?php echo $skill['Skill']['skill']; ?>&nbsp;</td>
		<td><?php echo $skill['Skill']['is_active']; ?>&nbsp;</td>
		<td><?php echo $skill['Skill']['created']; ?>&nbsp;</td>
		<td><?php echo $skill['Skill']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $skill['Skill']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $skill['Skill']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $skill['Skill']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $skill['Skill']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Skill', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>