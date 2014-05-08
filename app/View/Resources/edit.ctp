<?php $this->start('sessiontitle');?>
<?php //echo $this->Html->image('sessiontiles/sessiontile'.$activity[0]['Section']['number'].'.png', array('style'=>'margin-right: 10px', 'width'=>'30', 'height'=>'30'));?>
<?php if(isset($activityid)):?>
   <?php echo $this->Html->link('Session '.$activities['Section']['number'].': '.$activities['Section']['title'], array('controller' => 'sections', 'action' => 'view', $activities['Section']['id'])); ?>
<?php endif;?>
<?php $this->end();?>

<?php $this->start('activitytitle');?>
<?php if(isset($activityid)):?>
<?php echo $this->Html->link($activities['Type']['type'].' Activity: '.$activities['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $activities['Activity']['id']), array('class'=>'text-info')); ?>
<?php endif;?>
<?php $this->end();?>

<?php $this->start('navigation'); ?>
<?php if (isset($sectionid)){
echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $activities['Section']['course_id']), array('class' => 'btn btn-md btn-success btn-block')));
echo $this->Html->div('col-md-12', $this->Html->link('Back to Session'.$activities['Section']['number'], array('controller' => 'sections', 'action' => 'view', $activities['Section']['id']), array('class' => 'btn btn-md btn-warning btn-block')));
}
elseif (isset($activityid)){
    echo $this->Html->div('col-md-12', $this->Html->link('Back to Activity', array('controller' => 'activities', 'action' => 'view', $activities['Activity']['id']), array('class' => 'btn btn-md btn-info btn-block')));
}
else {
    echo $this->Html->div('col-md-12', $this->Html->link('Back to Resources', array('controller' => 'resources', 'action' => 'index'), array('class' => 'btn btn-md btn-info btn-block')));    
};?>
<?php $this->end(); ?>

<?php $this->start('resources');?>
<div class="panel panel-info">
    <div class="panel-body">
<?php echo $this->Form->create('Resource', array('class'=>'form'));?>
	<fieldset>
		<?php if (isset($activityid)){
                echo '<legend class="text-info">'.__('Edit Activity Resource').'</legend>';
            } elseif (isset ($sectionid))  {
                echo '<legend class="text-info">'.__('Edit Session Resource').'</legend>';
                } else {
                 echo '<legend class="text-info">'.__('Edit Resource').'</legend>';
                };?>
	<?php
		echo $this->Form->input('id');
		echo $this->Html->div('col-md-5', $this->Form->input('title', array('class'=>'form-control')));
		echo $this->Html->div('col-md-2', $this->Form->input('type_id', array('class'=>'form-control select_resource_type', 'options'=>array($types))));
		echo $this->Html->div('col-md-3', $this->Form->input('path', array('class'=>'form-control', 'label'=>'URL For This Resource')));
                echo $this->Html->div('col-md-2 brightcove_field', $this->Form->input('brightcove', array('class'=>'form-control', 'label'=>'BrightcoveID', 'placeholder'=>'**Optional**')));
		echo $this->Html->div('col-md-4', $this->Form->input('description', array('class'=>'form-control')));
		echo $this->Html->div('col-md-4', $this->Form->input('note', array('class'=>'form-control', 'label'=>'Notes About This Resource')));
                echo $this->Html->div('col-md-4', $this->Form->input('html', array('class'=>'form-control', 'label'=>'HTML Source Code')));
		if (isset($activityid)){
                    echo $this->Form->hidden('Activity', array('value'=>$activities['Activity']['id']));
                } elseif (isset($sectionid)) {
                    echo $this->Form->hidden('Section', array('value'=>$activities['Section']['id']));
                } else {
                    echo 'add to session or course';
                };
	?>
	</fieldset>
        <div class="col-md-10"></div>
      <?php  echo $this->Html->div('col-md-1', $this->Form->end(array('label'=>'Submit', 'class'=>'form-control btn btn-sm btn-info btn-block')));?>
      <?php  echo $this->Html->div('col-md-1', $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Resource.id')), array('class'=>'form-control btn btn-danger btn-sm btn-block'), __('Are you sure you want to delete this resource?')));?>
    </div>
</div>
<?php $this->end(); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Resource.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Resource.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Resources'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>