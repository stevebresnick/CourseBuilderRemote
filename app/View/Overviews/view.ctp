<?php $sectionid = $overview['Section']['id'];?>

<?php $this->start('coursetitle'); ?>
<?php echo $this->Html->link($overview['Section']['Course']['title'], array('controller' => 'courses', 'action' => 'view', $overview['Section']['Course']['id'])); ?>
<?php $this->end(); ?>

<?php $this->start('sessiontitle');?>
<?php echo $this->Html->link('Session '.$overview['Section']['number'].': '.$overview['Section']['title'], array('controller' => 'sections', 'action' => 'view', $overview['Section']['id'])); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $overview['Section']['Course']['id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Session Outline', array('controller' => 'sections', 'action' => 'outline', $overview['Section']['id']), array('class' => 'btn btn-md btn-default btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session', array('controller' => 'sections', 'action' => 'view', $overview['Section']['id']), array('class' => 'btn btn-md btn-info btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('overview');?>
<div class="col-md-12" style="border-bottom: 1px solid #0C8689;">
    <h3><?php  echo __('Session Overview');
    echo $this->Html->link(__('Add Paragraph'), array('action' => 'add', $sectionid), array('class'=>'btn btn-xs btn-info pull-right')); ?></h3>  
</div>


<?php foreach($overview['Section']['Overview'] as $paragraph):?>
<div class="col-md-10 panel panel-body">
<?php echo $paragraph['paragraph'];?>
</div>
<div class="col-md-1">
    <div class="panel-body">
<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paragraph['id'], $overview['Section']['id']), array('class'=>'btn btn-sm btn-warning')); ?>
</div>
</div>
<div class="col-md-1">
    <div class="panel-body">
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paragraph['id'], $overview['section_id']), array('data'=>array('section_id'=>$paragraph['section_id']), 'class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete this paragraph?')); ?>
</div>
</div>
<?php endforeach;?>
<div class="col-md-3">
    <?php echo $this->Html->link('<< Back to Session'.$overview['Section']['number'], array('controller'=>'sections','action' => 'view', $overview['Section']['id'])); ?>
</div>
<div class="col-md-6 text-center">
</div>
<div class="col-md-3"></div>
<?php $this->end();?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Overview'), array('action' => 'edit', $overview['Overview']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Overview'), array('action' => 'delete', $overview['Overview']['id']), null, __('Are you sure you want to delete # %s?', $overview['Overview']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Overviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Overview'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>

<?php $this->start('session');?>
<div class="sections view">
  <div class="panel panel-info col-md-12 panel-body">
    <div class="panel-group" id="accordion">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#ViewSession">
                         View Session <?php echo $overview['Section']['number'];?> Introduction
                    </a>
                </h4>
            </div>
            <div id="ViewSession" class="panel-collapse collapse">
                        <div class="panel panel-info col-md-12 panel-body" style="background: #fffbd9;">
            <div class="col-md-2">
                <p class="text-center"><?php echo $this->Html->image('sessiontiles/sessiontile' . $overview['Section']['number'] . '.png'); ?></p>
            </div>
            <div class="col-md-10">
                <h4 class="text-success"><strong><?php
                        echo 'Session ' . h($overview['Section']['number']);
                        echo ': ' . h($overview['Section']['title']);
                        ?></strong></h4>
                <p><?php echo h($overview['Section']['intro']); ?></p>
            </div>
        </div>
            </div>
        </div>
    </div>

<?php $this->end(); ?>

