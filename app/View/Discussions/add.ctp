<?php $this->start('sessiontitle');?>
<?php //echo $this->Html->image('sessiontiles/sessiontile'.$activity[0]['Section']['number'].'.png', array('style'=>'margin-right: 10px', 'width'=>'30', 'height'=>'30'));?>
<?php echo $this->Html->link('Session '.$activity[0]['Section']['number'].': '.$activity[0]['Section']['title'], array('controller' => 'sections', 'action' => 'view', $activity[0]['Section']['id'])); ?>
<?php $this->end();?>

<?php $this->start('activitytitle');?>
<?php echo $this->Html->link($activity[0]['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $activity[0]['Activity']['id'])); ?>
<?php $this->end();?>

<?php $this->start('activitytype');?>
<?php echo $this->Html->image($activity[0]['Type']['imgpath'], array('style'=>'margin-right: 10px', 'width'=>'30', 'height'=>'30'));?>
<?php echo $activity[0]['Type']['type'];?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $activity[0]['Section']['course_id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session'.$activity[0]['Section']['number'], array('controller' => 'sections', 'action' => 'view', $activity[0]['Section']['id']), array('class' => 'btn btn-md btn-warning btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Activity', array('controller' => 'activities', 'action' => 'view', $activity[0]['Activity']['id']), array('class' => 'btn btn-md btn-info btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('discussions');?>
<?php $sessionid = $activity[0]['Section']['id'];?>
<div class="panel panel-info">
    <div class="panel-body">
<?php echo $this->Form->create('Discussion');?>
	<fieldset>
            <legend class="text-info"><?php echo __('Add Discussion'); ?></legend>
	<?php
		echo $this->Html->div('form-group'), $this->Form->input('title', array('class'=>'form-control col-md-12'));
		echo $this->Html->div('form-group'), $this->Form->input('intro', array('class'=>'form-control col-md-12', 'rows'=>3));
		echo $this->Html->div('form-group'), $this->Form->input('prompt', array('class'=>'form-control col-md-12', 'rows'=>3));
		echo $this->Form->hidden('activity_id', array('value'=>$activityid));
		echo $this->Form->hidden('section_id', array('value'=>$sessionid));
	?>
	</fieldset>
<div class="col-md-11"></div>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Save', 'class'=>'form-control btn btn-sm btn-info')));?>
            <?php echo $this->Html->link('<<< Back to Activity', array('controller'=>'activities', 'action'=>'view', $activity[0]['Activity']['id']), array('class'=>'text-info pull-left'));?>

  </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Other Discussions in This Activity</h3>
    </div>
    <div class="panel-body">
        <?php foreach($activity[0]['Discussion'] as $discussion):?>
        <div class="panel panel-default panel-body col-md-12" style="height:100px;">
            <div class="col-md-2">
                <?php echo $this->Html->image('icons/icon3.png');?>
            </div>
            <div class="col-md-4">
                <p class="lead"><?php echo $this->Html->link($discussion['title'], array('action'=>'view', $discussion['id']));?></p>
            </div>
            <div class="col-md-5" style="height:70px; overflow-y: hidden; overflow: scroll;">
                <p><?php echo $discussion['intro'];?></p>
            </div>
            <div class="col-md-1">
                <?php echo $this->Html->link('Edit', array('action'=>'edit', $discussion['id'], $discussion['activity_id']), array('class'=>'btn btn-warning btn-sm btn-block'));?>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php $this->end();?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Discussions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
