<div class="steps view">
<h2><?php  echo __('Step');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($step['Step']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($step['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $step['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PrecedureStep'); ?></dt>
		<dd>
			<?php echo h($step['Step']['precedureStep']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Step'), array('action' => 'edit', $step['Step']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Step'), array('action' => 'delete', $step['Step']['id']), null, __('Are you sure you want to delete # %s?', $step['Step']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Steps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Step'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
