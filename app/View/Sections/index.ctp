<div class="sections index">
	<h2><?php echo __('Sections');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('number');?></th>
			<th><?php echo $this->Paginator->sort('course_id');?></th>
			<th><?php echo $this->Paginator->sort('scope_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('intro');?></th>
			<th><?php echo $this->Paginator->sort('quote');?></th>
			<th><?php echo $this->Paginator->sort('speaker');?></th>
			<th><?php echo $this->Paginator->sort('year');?></th>
			<th><?php echo $this->Paginator->sort('video');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($sections as $section): ?>
	<tr>
		<td><?php echo h($section['Section']['id']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($section['Course']['title'], array('controller' => 'courses', 'action' => 'view', $section['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($section['Scope']['name'], array('controller' => 'scopes', 'action' => 'view', $section['Scope']['id'])); ?>
		</td>
		<td><?php echo h($section['Section']['title']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['intro']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['quote']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['speaker']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['year']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['video']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $section['Section']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $section['Section']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $section['Section']['id']), null, __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scopes'), array('controller' => 'scopes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scope'), array('controller' => 'scopes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussions'), array('controller' => 'discussions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion'), array('controller' => 'discussions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Overviews'), array('controller' => 'overviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Overview'), array('controller' => 'overviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
