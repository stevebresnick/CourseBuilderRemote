<div class="discussions index">
	<h2><?php echo __('Discussions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('intro');?></th>
			<th><?php echo $this->Paginator->sort('prompt');?></th>
			<th><?php echo $this->Paginator->sort('activity_id');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($discussions as $discussion): ?>
	<tr>
		<td><?php echo h($discussion['Discussion']['id']); ?>&nbsp;</td>
		<td><?php echo h($discussion['Discussion']['title']); ?>&nbsp;</td>
		<td><?php echo h($discussion['Discussion']['intro']); ?>&nbsp;</td>
		<td><?php echo h($discussion['Discussion']['prompt']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($discussion['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $discussion['Activity']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($discussion['Section']['title'], array('controller' => 'sections', 'action' => 'view', $discussion['Section']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $discussion['Discussion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $discussion['Discussion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $discussion['Discussion']['id']), null, __('Are you sure you want to delete # %s?', $discussion['Discussion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Discussion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
