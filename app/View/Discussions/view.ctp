<?php $this->start('sessiontitle');?>
<?php //echo $this->Html->image('sessiontiles/sessiontile'.$activity[0]['Section']['number'].'.png', array('style'=>'margin-right: 10px', 'width'=>'30', 'height'=>'30'));?>
<?php echo $this->Html->link('Session '.$discussion['Activity']['Section']['number'].': '.$discussion['Activity']['Section']['title'], array('controller' => 'sections', 'action' => 'view', $discussion['Activity']['Section']['id'])); ?>
<?php $this->end();?>

<?php $this->start('activitytitle');?>
<?php echo $this->Html->link($discussion['Activity']['Type']['type'].' Activity: '.$discussion['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $discussion['Activity']['id']), array('class'=>'text-info')); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session'.$discussion['Activity']['Section']['number'], array('controller' => 'sections', 'action' => 'view', $discussion['Activity']['Section']['id']), array('class' => 'btn btn-md btn-warning btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Activity', array('controller' => 'activities', 'action' => 'view', $discussion['Activity']['id']), array('class' => 'btn btn-md btn-info btn-block'))); ?>
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
                <p class="text-center"><?php echo $this->Html->image('sessiontiles/sessiontile' . $discussion['Activity']['Section']['number'] . '.png'); ?></p>
            </div>
            <div class="col-md-10">
                <h4 class="text-success"><strong><?php
                        echo h($discussion['Activity']['title']);
                        ?></strong></h4>
                <p><?php echo h($discussion['Activity']['introbrief']); ?></p>
            </div>
        </div>
            </div>
        </div>
    </div>
<?php $this->end();?>

<?php $this->start('discussions');?>
<div class="panel panel-info panel-body">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h3 class="panel-title"><?php echo $discussion['Discussion']['title'];?></h3>
            </div>
            <div class="panel-body">
                <div class="col-md-2">
                    <?php echo $this->Html->image('icons/icon3.png', array('class'=>'img-thumbnail'));?>
                    <?php echo $this->Html->link('Edit', array('action'=>'edit', $discussion['Discussion']['id'], $discussion['Discussion']['activity_id']), array('class'=>'btn btn-sm btn-warning btn-block'));?>
                    <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $discussion['Discussion']['id'], $discussion['Discussion']['activity_id']), array('class'=>'btn btn-sm btn-block btn-danger'), __('Are you sure you want to delete this discussion?')); ?>
                </div>
                <div class="col-md-10">
                    <h5 class="text-success"><?php echo __('Discussion Introduction:');?></h5>
                    <p class="lead"><?php echo $discussion['Discussion']['intro'];?></p>
                    <h5 class="text-info"><?php echo __('Discussion Prompt:');?></h5>
                    <p class="lead"><?php echo $discussion['Discussion']['prompt'];?></p>
                </div>
    </div>
</div>
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

<div class="discussions view">
<h2><?php  echo __('Discussion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discussion['Discussion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($discussion['Discussion']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intro'); ?></dt>
		<dd>
			<?php echo h($discussion['Discussion']['intro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prompt'); ?></dt>
		<dd>
			<?php echo h($discussion['Discussion']['prompt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($discussion['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $discussion['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($discussion['Section']['title'], array('controller' => 'sections', 'action' => 'view', $discussion['Section']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discussion'), array('action' => 'edit', $discussion['Discussion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Discussion'), array('action' => 'delete', $discussion['Discussion']['id']), null, __('Are you sure you want to delete # %s?', $discussion['Discussion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
