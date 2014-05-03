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

<?php $this->start('procedure');?>
<div class="panel panel-info panel-body">
    <div class="panel panel-info panel-body">
<?php echo $this->Form->create('Step');?>
	<fieldset>
	<?php
		echo $this->Form->hidden('activity_id', array('value'=>$activities[0]['Activity']['id']));
                echo $this->Html->div('col-md-12 form-group', $this->Form->input('procedureStep', array('class'=>'form-control', 'label'=>'Edit Procedure Step')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
    </div>
    <div class='panel panel-info'>
        <div class="panel-heading">
            <h3 class="panel-title text-center">Procedure for Activity: <?php echo $activities[0]['Activity']['title'];?></h3>
        </div>
        <div class="panel panel-body">
            <ol>
            <?php foreach($activities[0]['Step'] as $step):?>
                <div>
                <div class="col-md-10">
                    <li>
                        <p class="lead">
                        <?php echo $step['procedureStep'];?>
                        </p>
                    </li>
                </div>
                <div class="col-md-1">
                    <p class="pull-right"><?php echo $this->Html->link(__('Edit'), array('action'=>'edit', $step['id'], $step['activity_id']), array('class'=>'btn btn-xs btn-warning'));?></p>
                </div>
                    <div class="col-md-1">
                        <p class="pull-right"><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Step.id'), $step['activity_id']), array('class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete this procedure step?')); ?>
                </div>
                </div>
            <?php endforeach;?>
            </ol>
        </div>
        <?php echo $this->Html->link('<<< Back to Activity', array('controller'=>'activities', 'action'=>'view', $activities[0]['Activity']['id']), array('class'=>'text-info pull-left'));?>
    </div>
<?php $this->end();?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Goals'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
    </div>
<?php $this->end();?>

<div class="steps form">
<?php echo $this->Form->create('Step');?>
	<fieldset>
		<legend><?php echo __('Edit Step'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('activity_id');
		echo $this->Form->input('precedureStep');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Step.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Step.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Steps'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
