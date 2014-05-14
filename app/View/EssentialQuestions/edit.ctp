<?php $this->start('coursetitle'); ?>
<?php echo $this->Html->link($sections[0]['Course']['title'], array('controller' => 'courses', 'action' => 'view', $sections[0]['Course']['id'])); ?>
<?php $this->end(); ?>

<?php $this->start('sessiontitle');?>
<?php echo $this->Html->link('Session '.$sections[0]['Section']['number'].': '.$sections[0]['Section']['title'], array('controller' => 'sections', 'action' => 'view', $sections[0]['Section']['id'])); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $sections[0]['Course']['id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Session Outline', array('controller' => 'sections', 'action' => 'outline', $sections[0]['Section']['id']), array('class' => 'btn btn-md btn-default btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session', array('controller' => 'sections', 'action' => 'view', $sections[0]['Section']['id']), array('class' => 'btn btn-md btn-info btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('session');?>
<div class="sections view">
  <div class="panel panel-info col-md-12 panel-body">
    <div class="panel-group" id="accordion">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#ViewSession">
                         View Session <?php echo $sections[0]['Section']['number'];?> Introduction
                    </a>
                </h4>
            </div>
            <div id="ViewSession" class="panel-collapse collapse">
                        <div class="panel panel-info col-md-12 panel-body" style="background: #fffbd9;">
            <div class="col-md-2">
                <p class="text-center"><?php echo $this->Html->image('sessiontiles/sessiontile' . $sections[0]['Section']['number'] . '.png'); ?></p>
            </div>
            <div class="col-md-10">
                <h4 class="text-success"><strong><?php
                        echo 'Session ' . h($sections[0]['Section']['number']);
                        echo ': ' . h($sections[0]['Section']['title']);
                        ?></strong></h4>
                <p><?php echo h($sections[0]['Section']['intro']); ?></p>
            </div>
        </div>
            </div>
        </div>
    </div>

<?php $this->end(); ?>

<?php $this->start('essentialquestions');?>
<div class="panel panel-body">
<?php echo $this->Form->create('EssentialQuestion');?>
	<fieldset>
            <legend class="text-warning"><?php echo __('Edit Question'); ?></legend>
	<?php
		echo $this->Form->hidden('section_id', array('value'=>$sectionid));
		echo $this->Html->div('form-group col-md-12', $this->Form->input('question', array('class'=> 'form-control'))
        );?>
	</fieldset>
<div class="col-md-11"></div>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Submit', 'class'=>'form-control btn btn-xs btn-info')));?>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class=" panel-title">Essential Questions for Session <?php echo $sections[0]['Section']['number'];?></h3>
     </div>
    <div class="panel-body">
    <ol>
<?php foreach ($sections as $section):?>
     <?php foreach($section['EssentialQuestion']as $question):?>
            <div class="col-md-10">
                <li class="text-success lead"><?php echo $question['question'];?></li>
            </div>
        <div class="col-md-2">
            <div class="col-md-5">
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $question['id'], $sectionid), array('class'=>'btn btn-xs btn-warning'));?>
            </div>
            <div class="col-md-7">
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $question['id']), array('data'=>array('section_id'=>$sectionid), 'class'=>'btn btn-xs btn-danger'), __('Are you sure you want to delete this question?')); ?>
            </div>
        </div>
    <?php endforeach;?>
<?php endforeach;?>
    </ol>
</div>
<?php $this->end();?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Essential Questions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
