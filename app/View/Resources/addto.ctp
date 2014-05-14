<?php $this->start('resources');?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">
            Add Resource to Session or Activity
        </h3>
    </div>
    <div class="panel-body">
            <div class="col-md-1">
                <?php echo $this->Html->image('icons/icon'.$resource['Resource']['type_id'].'.png');?>
            </div>
            <div class="col-md-11">
                <h3 class="text-center"><?php echo $resource['Resource']['title'];?></h3>
                <h4 class="text-center"><?php echo $resource['Type']['type'];?> Resource</h4>
            </div>
            <hr/>
            <div class="col-md-12">
                <h4>Description:</h4>
                <div class="col-md-12">
                    <?php echo $resource['Resource']['description'];?>
                </div>
            </div>
    </div>
</div>
<?php $this->end();?>

<?php $this->start('sessionsandactivities');?>
<h3 class="text-center">Click on a link to Add Resource to a Session or Activity: </h3>
<?php if ($role == 'Coursebuilders'): ?>
    <?php foreach ($courseuser as $user): ?>
        <?php foreach ($courses as $course): ?>
            <?php if ($course['Course']['id'] === $user['Course']['id']): ?>
                <ul>
                    <li><?php echo $course['Course']['title']; ?></li>
                    <ul>
                        <?php foreach ($course['Section'] as $section): ?>
                            <li><?php echo $this->Html->link($section['title'], array('action' => 'addto', $resourceid, $section['id'])); ?></li>
                            <ul>
                            <?php foreach ($section['Activity'] as $activity):?>
                                <li><?php echo $this->Html->link($activity['title'], array('action' => 'addto', $resourceid, $section['id'], $activity['id']));?></li>
                            <?php endforeach;?>
                            </ul>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </ul>
        <?php endforeach; ?>
    <?php endforeach; ?>
<?php endif; ?>

<?php if ($role == 'Admin'): ?>
    <ul>
        <?php foreach ($courses as $course): ?>
            <li><?php echo $course['Course']['title']; ?>
                <?php
                if ($course['Course']['master'] == 1) {
                    echo ' (master)';
                };
                ?>
            </li>
            <ul>
                    <?php foreach ($course['Section'] as $section): ?>
                    <li>
                            <?php echo $this->Html->link($section['title'], array('action' => 'addto', $resourceid, $section['id'])); ?>
                        <ul>
                            <?php foreach ($section['Activity'] as $activity): ?>
                                <li><?php echo $this->Html->link($activity['title'], array('action' => 'addto', $resourceid, $section['id'], $activity['id'])); ?></li>
            <?php endforeach; ?>
                        </ul>
                    </li>
            <?php endforeach; ?>
            </ul>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php $this->end();?>