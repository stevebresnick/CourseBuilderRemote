<?php $this->start('essentialquestions');?>
<div class="essentialQuestions view">
<h2><?php  echo __('Essential Question');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($essentialQuestion['EssentialQuestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($essentialQuestion['Section']['title'], array('controller' => 'sections', 'action' => 'view', $essentialQuestion['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo h($essentialQuestion['EssentialQuestion']['question']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Essential Question'), array('action' => 'edit', $essentialQuestion['EssentialQuestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Essential Question'), array('action' => 'delete', $essentialQuestion['EssentialQuestion']['id']), null, __('Are you sure you want to delete # %s?', $essentialQuestion['EssentialQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Essential Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Essential Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php $this->end();?>
