<?php $this->start('coursetitle');?>
<?php echo $this->Html->link($courses[$courseid], array('controller' => 'courses', 'action' => 'view', $courseid)); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $courseid), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('session');?>

<?php $potentialsessions = array(0,1,2,3,4,5,6,7,8,9,10);?>
<?php $existingsessions = array();?>
<?php foreach($sections as $sessions):?>
<?php $existingsessions[] = $sessions['Section']['number'];?>
<?php endforeach;?>
<?php $sessionsremaining = array_diff($potentialsessions, $existingsessions);?>
<?php unset($sessionsremaining[0]);?>

<div class="sections form panel panel-info panel-body">
<?php echo $this->Form->create('Section');?>
	<fieldset>
            <legend class="text-info"><?php echo __('Add Session'); ?></legend>
	<?php
		echo $this->Html->div('form-group col-md-1', $this->Form->input('number', array('type'=>'select', 'options'=>$sessionsremaining), array('class' => 'form-control')));
                echo $this->Html->div('form-group col-md-4', $this->Form->input('title', array('class' => 'form-control')));
                echo $this->Html->div('form-group col-md-4', $this->Form->input('video', array('class' => 'form-control')));
                echo $this->Html->div('form-group col-md-3', $this->Form->input('scope_id', array('label'=>'Scope and Sequence','class' => 'form-control')));
                echo $this->Html->div('form-group col-md-12', $this->Form->input('intro', array('class' => 'form-control', 'rows'=>5)));
                echo $this->Html->div('form-group col-md-12', $this->Form->input('quote', array('class' => 'form-control', 'rows'=>2)));
                echo $this->Html->div('form-group col-md-7', $this->Form->input('speaker', array('class' => 'form-control')));
                echo $this->Html->div('form-group col-md-2', $this->Form->input('year', array('class' => 'form-control')));
                echo $this->Form->hidden('course_id', array('value'=>$courseid));
	?>
	</fieldset>
    <div class="col-md-11"></div>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Submit', 'class'=>'form-control btn btn-sm btn-info')));?>
</div>
<?php $this->end();?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index'));?></li>
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