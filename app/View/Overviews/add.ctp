<?php foreach($sections as $sessions):?>
<?php $coursetitle = $sessions['Course']['title'];?>
<?php $courseid = $sessions['Course']['id'];?>
<?php $sessiontitle = $sessions['Section']['title'];?>
<?php $sessionnumber = $sessions['Section']['number'];?>
<?php $sessionintro = $sessions['Section']['intro'];?>
<?php $sessionid = $sessions['Section']['id'];?>
<?php endforeach;?>

<?php $this->start('coursetitle'); ?>
<?php echo $this->Html->link($coursetitle, array('controller' => 'courses', 'action' => 'view', $courseid)); ?>
<?php $this->end(); ?>

<?php $this->start('sessiontitle');?>
<?php echo $this->Html->link('Session '.$sessionnumber.': '.$sessiontitle, array('controller' => 'sections', 'action' => 'view', $sessionid)); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $courseid), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Session Outline', array('controller' => 'sections', 'action' => 'outline', $sessionid), array('class' => 'btn btn-md btn-default btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session', array('controller' => 'sections', 'action' => 'view', $sessionid), array('class' => 'btn btn-md btn-info btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('session');?>
  <div class="panel panel-info col-md-12 panel-body">
    <div class="panel-group" id="accordion">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#ViewSession">
                         View Session <?php echo $sessionnumber;?> Introduction
                    </a>
                </h4>
            </div>
            <div id="ViewSession" class="panel-collapse collapse">
                        <div class="panel panel-info col-md-12 panel-body" style="background: #fffbd9;">
            <div class="col-md-2">
                <p class="text-center"><?php echo $this->Html->image('sessiontiles/sessiontile' . $sessionnumber . '.png'); ?></p>
            </div>
            <div class="col-md-10">
                <h4 class="text-success"><strong><?php
                        echo 'Session ' . h($sessionnumber);
                        echo ': ' . h($sessiontitle);
                        ?></strong></h4>
                <p><?php echo h($sessionintro); ?></p>
            </div>
        </div>
            </div>
        </div>
    </div>

<?php $this->end(); ?>


<?php $this->start('overview')?>
<?php foreach ($sections as $section):?>
<?php foreach ($section['Overview'] as $paragraph):?>
<div class="col-md-10 panel panel-body">
<?php echo $paragraph['paragraph'];?>
</div>
<div class="col-md-1">
    <div class="panel-body">
<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paragraph['id'], $paragraph['section_id']), array('class'=>'btn btn-sm btn-warning')); ?>
</div>
</div>
<div class="col-md-1">
    <div class="panel-body">
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paragraph['id'], $paragraph['section_id']), array('data'=>array('section_id'=>$paragraph['section_id']), 'class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete this paragraph?')); ?>
</div>
</div>
<?php endforeach;?>
<?php endforeach;?>

<div class="col-md-12">
<?php echo $this->Form->create('Overview');?>
	<fieldset>
            <legend class="text-info"><?php echo __('Add Paragraph'); ?></legend>
	<?php
		echo $this->Form->hidden('section_id', array('value'=>$sectionid));
                echo $this->Html->div('form-group col-md-12', $this->Form->input('paragraph', array('class'=> 'form-control'))
        );
	?>
	</fieldset>
    <div class="col-md-11"></div>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Submit', 'class'=>'form-control btn btn-sm btn-info')));?>
</div>
      </div>
<?php $this->end();?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Overviews'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
