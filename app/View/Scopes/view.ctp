<div class="scopes view">
<h2><?php  echo __('Scope');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($scope['Scope']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($scope['Scope']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Icon'); ?></dt>
		<dd>
			<?php echo h($scope['Scope']['icon']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Scope'), array('action' => 'edit', $scope['Scope']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Scope'), array('action' => 'delete', $scope['Scope']['id']), null, __('Are you sure you want to delete # %s?', $scope['Scope']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Scopes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scope'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sections');?></h3>
	<?php if (!empty($scope['Section'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Scope Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Intro'); ?></th>
		<th><?php echo __('Quote'); ?></th>
		<th><?php echo __('Speaker'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Video'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($scope['Section'] as $section): ?>
		<tr>
			<td><?php echo $section['id'];?></td>
			<td><?php echo $section['number'];?></td>
			<td><?php echo $section['course_id'];?></td>
			<td><?php echo $section['scope_id'];?></td>
			<td><?php echo $section['title'];?></td>
			<td><?php echo $section['intro'];?></td>
			<td><?php echo $section['quote'];?></td>
			<td><?php echo $section['speaker'];?></td>
			<td><?php echo $section['year'];?></td>
			<td><?php echo $section['video'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $section['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete', $section['id']), null, __('Are you sure you want to delete # %s?', $section['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
