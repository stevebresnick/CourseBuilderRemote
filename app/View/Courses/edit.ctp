
<?php $this->start('coursetitle');?>
<?php echo $this->Html->link($course['Course']['title'], array('controller' => 'courses', 'action' => 'view', $course['Course']['id'])); ?>
<?php $this->end();?>

<?php $this->start('course level info'); ?>
<div class="courses form panel panel-info panel-body">
    <?php echo $this->Form->create('Course'); ?>
    <fieldset>
        <legend class="text-info"><?php echo __('Edit Course');?></legend>
        <?php
        echo $this->Html->div('form-group col-md-9', $this->Form->input('title', array('class' => 'form-control'))
        );
        echo $this->Html->div('form-group col-md-3', $this->Form->input('callnumber', array('class' => 'form-control'))
        );
        echo $this->Html->div('form-group col-md-12', $this->Form->input('intro', array('class'=> 'form-control'))
        );
        ?>
    </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php $this->end(); ?>

<?php $this->start('navigation');?>
<?php 
echo $this->Html->div('col-md-12', $this->Html->link(__('User Dashboard'), array('controller'=>'users','action' => 'dashboard'), array('class'=>'btn btn-success btn-md btn-block')));
echo $this->Html->div('col-md-12', $this->Html->link(__('Course Dashboard'), array('action' => 'view', $course['Course']['id']), array('class' => 'btn btn-warning btn-md btn-block')));
echo $this->Html->div('col-md-12', $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $this->Form->value('Course.id')), array('class'=>'btn btn-danger btn-md btn-block'), __('Are you sure you want to delete %s?', $this->Form->value('Course.title'))));?>
<?php $this->end(); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Course.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Course.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
