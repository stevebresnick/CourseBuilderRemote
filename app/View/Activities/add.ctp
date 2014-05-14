<?php $this->start('sessiontitle');?>
<?php //echo $this->Html->image('sessiontiles/sessiontile'.$activity[0]['Section']['number'].'.png', array('style'=>'margin-right: 10px', 'width'=>'30', 'height'=>'30'));?>
<?php echo $this->Html->link('Session '.$sections[0]['Section']['number'].': '.$sections[0]['Section']['title'], array('controller' => 'sections', 'action' => 'view', $sections[0]['Section']['id'])); ?>
<?php $this->end();?>

<?php $this->start('activitytitle');?>
<?php echo __('Add Activity'); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $sections[0]['Section']['course_id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session'.$sections[0]['Section']['number'], array('controller' => 'sections', 'action' => 'view', $sections[0]['Section']['id']), array('class' => 'btn btn-md btn-warning btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('activities');?>
<div class="panel panel-info panel-body">
<?php echo $this->Form->create('Activity');?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->hidden('section_id', array('value'=>$sections[0]['Section']['id']));?>
                <div class="col-md-12">
        <?php   echo $this->Html->div('col-md-7 form-group', $this->Form->input('title', array('class'=>'form-control')));
                echo $this->Html->div('col-md-3 form-group', $this->Form->input('type_id', array('class'=>'form-control', 'options'=>array($types))));
		echo $this->Html->div('col-md-2 form-group', $this->Form->input('required', array('class'=>'form-control', 'label'=>'Required?')));?>
                </div>
                <div class="col-md-12">
        <?php   echo $this->Html->div('col-md-12 form-group', $this->Form->input('introbrief', array('class'=>'form-control', 'label'=>'Brief Introduction')));
                echo $this->Html->div('col-md-12 form-group', $this->Form->input('introdetailed', array('class'=>'form-control', 'label'=>'Detailed Introduction')));
                echo $this->Html->div('col-md-12 form-group', $this->Form->input('url', array('class'=>'form-control', 'label'=>'URL Where the Activity Will Reside')));?>        
                </div>
	</fieldset>
<div class="col-md-11"></div>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Save', 'class'=>'form-control btn btn-sm btn-info')));?>
</div>
<?php $this->end();?>
<div class="actions">
	<h3><?php echo __('Action'); ?></h3>
	<ul>

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
