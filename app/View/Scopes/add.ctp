<div class="scopes form">
<?php echo $this->Form->create('Scope');?>
	<fieldset>
		<legend><?php echo __('Add Scope'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('icon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Scopes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
