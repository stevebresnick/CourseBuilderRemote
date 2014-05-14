<?php $this->start('sessiontitle');?>
<?php echo $this->Html->link('Session '.$activities[0]['Section']['number'].': '.$activities[0]['Section']['title'], array('controller' => 'sections', 'action' => 'view', $activities[0]['Section']['id'])); ?>
<?php $this->end();?>

<?php $this->start('activitytitle');?>
<?php echo $this->Html->link('Session '.$activities[0]['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $activities[0]['Activity']['id'])); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $activities[0]['Section']['Course']['id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link(__('Back to Activity'), array('action' => 'view', $activities[0]['Activity']['id']), array('class' => 'btn btn-md btn-warning btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('activities');?>
<div class="panel panel-info panel-body">
<?php echo $this->Form->create('Activity');?>
	<fieldset>
            <legend class="text-info"><?php echo __('Edit Activity'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->hidden('section_id', array('value'=>$activities[0]['Activity']['section_id']));?>
                <div class="col-md-12">
        <?php   echo $this->Html->div('col-md-5 form-group', $this->Form->input('title', array('class'=>'form-control')));
                echo $this->Html->div('col-md-2 form-group', $this->Form->input('type_id', array('class'=>'form-control', 'options'=>array($types))));
                echo $this->Html->div('col-md-3 form-group', $this->Form->input('image', array('class'=>'form-control', 'label'=>'Activity Image URL', 'placeholder'=>'**Optional**')));
		echo $this->Html->div('col-md-2 form-group', $this->Form->input('required', array('class'=>'form-control', 'label'=>'Required?')));?>
                </div>
                <div class="col-md-12">
        <?php   echo $this->Html->div('col-md-12 form-group', $this->Form->input('introbrief', array('class'=>'form-control', 'rows'=>2)));
                echo $this->Html->div('col-md-12 form-group', $this->Form->input('introdetailed', array('class'=>'form-control')));
                echo $this->Html->div('col-md-12 form-group', $this->Form->input('url', array('class'=>'form-control', 'label'=>'URL Where the Activity Will Reside')));?>        
                </div>
	</fieldset>
<div class="col-md-11"></div>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Save', 'class'=>'form-control btn btn-sm btn-info')));?>
</div>
<?php $this->end();?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Activity.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Activity.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussions'), array('controller' => 'discussions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion'), array('controller' => 'discussions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goals'), array('controller' => 'goals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal'), array('controller' => 'goals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Steps'), array('controller' => 'steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resources'), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource'), array('controller' => 'resources', 'action' => 'add')); ?> </li>
	</ul>
</div>
