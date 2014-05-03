<div class="courses index">
<?php $this->start('navigation');?>
<?php echo $this->Html->link(__('Add New Course'), array('action' => 'add'), array('class'=>'btn btn-success btn-md btn-block'));?>
<?php /* if (!isset($master)){
echo $this->Html->link(__('Clone Master Course'), array('action' => 'index', 'master'), array('class'=>'btn btn-info btn-md btn-block'));
}
else
{
echo $this->Html->link(__('View Courses'), array('action' => 'index'), array('class'=>'btn btn-primary btn-md btn-block'));  
}; */?>
<?php echo $this->end();?>
    
    <?php $this->start('courses'); ?>
    <div class="courses">
        <?php foreach ($courses as $course): ?>
            <?php $coursetitle = h($course['Course']['title']); ?>
            <?php $callnumber = h($course['Course']['callnumber']); ?>
            <?php $courseintro = h($course['Course']['intro']); ?>
            <!---------COURSE BLOCK START------->
            <div class="row">
                <div class="col-md-12">
                    <div class=" panel panel-info">
                        <div class="panel-heading">
                            <h1 class="panel-title"><?php echo $coursetitle;?></h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $course['Course']['id']), array('class' => 'btn btn-success btn-sm'));?>
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $course['Course']['id']), array('class' => 'btn btn-warning btn-sm'));?>
                                    <?php echo $this->Html->link(__('Outline'), array('action' => 'outline', $course['Course']['id']), array('class' => 'btn btn-default btn-sm'));?>
                                    <?php if(isset($master)){
                                        echo $this->Html->link(__('Clone'), array('action' => 'duplicate', $course['Course']['id']), array('class' => 'btn btn-default btn-sm'));
                                    };?>
                                </div>
                                <div class="col-md-9">
                                    <p class="lead"><?php echo $courseintro; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---------COURSE BLOCK END--------->

    <?php endforeach; ?>
    </div>
<?php $this->end(); ?>
</div>
