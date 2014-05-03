<?php $this->start('overview');?>
<?php $sessionid = $overviews['Overview']['section_id'];?>
<?php $coursetitle = $overviews['Section']['Course']['title'];?>

<?php $this->start('coursetitle'); ?>
<?php echo $this->Html->link($coursetitle, array('controller' => 'courses', 'action' => 'view', $overviews['Section']['Course']['id'])); ?>
<?php $this->end(); ?>

<?php $this->start('sessiontitle');?>
<?php echo $this->Html->link('Session '.$overviews['Section']['number'].': '.$overviews['Section']['title'], array('controller' => 'sections', 'action' => 'view', $overviews['Section']['id'])); ?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $overviews['Section']['Course']['id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Session Outline', array('controller' => 'sections', 'action' => 'outline', $overviews['Section']['id']), array('class' => 'btn btn-md btn-default btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session', array('controller' => 'sections', 'action' => 'view', $overviews['Section']['id']), array('class' => 'btn btn-md btn-info btn-block'))); ?>
<?php $this->end(); ?>


<div class="sections form panel panel-info panel-body">
<?php echo $this->Form->create('Overview');?>
	<fieldset>
            <legend class="text-info"><?php echo __('Edit Overview Paragraph'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->hidden('section_id', array('value'=>$sessionid));
		echo $this->Html->div('form-group col-md-12', $this->Form->input('paragraph', array('class'=>'form-control')));
	?>
	</fieldset>
    <div class="col-md-11"></div>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Submit', 'class'=>'form-control btn btn-sm btn-info')));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Overview.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Overview.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Overviews'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php $this->end();?>
