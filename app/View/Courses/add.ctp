<?php $this->start('courses'); ?>
<div class="courses form panel panel-info panel-body">
    <?php echo $this->Form->create('Course'); ?>
    <fieldset>
        <legend class="text-info"><?php echo __('Add Course'); ?></legend>
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
<?php echo $this->Html->link(__('Back to Courses'), array('action' => 'index'), array('class'=>'btn btn-success btn-md btn-block'));?>
<?php $this->end(); ?>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
    </ul>
</div>
