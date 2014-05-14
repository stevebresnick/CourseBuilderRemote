<?php $this->start('sessiontitle');?>
<?php //echo $this->Html->image('sessiontiles/sessiontile'.$activity[0]['Section']['number'].'.png', array('style'=>'margin-right: 10px', 'width'=>'30', 'height'=>'30'));?>
<?php echo $this->Html->link('Session '.$activities[0]['Section']['number'].': '.$activities[0]['Section']['title'], array('controller' => 'sections', 'action' => 'view', $activities[0]['Section']['id'])); ?>
<?php $this->end();?>

<?php $this->start('activitytitle');?>
<?php echo $this->Html->link($activities[0]['Type']['type'].' Activity: '.$activities[0]['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $activities[0]['Activity']['id']), array('class'=>'text-info')); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $activities[0]['Section']['course_id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session'.$activities[0]['Section']['number'], array('controller' => 'sections', 'action' => 'view', $activities[0]['Section']['id']), array('class' => 'btn btn-md btn-warning btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Activity', array('controller' => 'activities', 'action' => 'view', $activities[0]['Activity']['id']), array('class' => 'btn btn-md btn-info btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('session');?>
<div class="panel-group" id="accordion">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#ViewSession">
                         View Activity Brief Introduction
                    </a>
                </h4>
            </div>
            <div id="ViewSession" class="panel-collapse collapse">
                        <div class="panel panel-info col-md-12 panel-body" style="background: #fffbd9;">
            <div class="col-md-2">
                <p class="text-center"><?php echo $this->Html->image('sessiontiles/sessiontile' . $activities[0]['Section']['number'] . '.png'); ?></p>
            </div>
            <div class="col-md-10">
                <h4 class="text-success"><strong><?php
                        echo h($activities[0]['Activity']['title']);
                        ?></strong></h4>
                <p><?php echo h($activities[0]['Activity']['introbrief']); ?></p>
            </div>
        </div>
            </div>
        </div>
    </div>
<?php $this->end();?>

<?php $this->start('goals');?>
<div class="panel panel-info panel-body">
    <div class="panel panel-info panel-body">
<?php echo $this->Form->create('Goal');?>
	<fieldset>
	<?php
		echo $this->Form->hidden('activity_id', array('value'=>$activities[0]['Activity']['id']));
                echo $this->Html->div('col-md-12 form-group', $this->Form->input('goal', array('class'=>'form-control', 'label'=>'Edit Activity Goal')));
	?>
	</fieldset>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Save', 'class'=>'form-control btn btn-xs btn-info btn-block')));?> 
    </div>
<div class='panel panel-success'>
        <div class="panel-heading">
            <h3 class="panel-title"><span class="text-center">Goals for Activity: <?php echo $activities[0]['Activity']['title'];?></span><span class="pull-right"><?php echo $this->Html->link('Add Goal', array('action'=>'add', $activities[0]['Activity']['id']), array('class'=>'btn btn-default btn-xs btn-block'));?></span></h3>
        </div>
        <div class="panel panel-body">
            <ol>
            <?php foreach($activities[0]['Goal'] as $goal):?>
                <div>
                <div class="col-md-10">
                    <li>
                        <p class="lead">
                        <?php echo $goal['goal'];?>
                        </p>
                    </li>
                </div>
                <div class="col-md-1">
                    <p class="pull-right"><?php echo $this->Html->link(__('Edit'), array('action'=>'edit', $goal['id'], $goal['activity_id']), array('class'=>'btn btn-xs btn-warning'));?></p>
                </div>
                    <div class="col-md-1">
                        <p class="pull-right"><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Goal.id'), $this->Form->value('Goal.activity_id')), array('class'=>'btn btn-danger btn-xs'));?></p>
                </div>
                </div>
            <?php endforeach;?>
            </ol>
        </div>
        <?php echo $this->Html->link('<<< Back to Activity', array('controller'=>'activities', 'action'=>'view', $activities[0]['Activity']['id']), array('class'=>'text-info pull-left'));?>
    </div>
    </div>
<?php $this->end();?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Goal.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Goal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Goals'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
