<?php $this->extend('/Common/courseview'); ?>


<?php $this->start('courseheading'); ?>
<div class="container">
    <div class="col-md-2"><h4><?php echo $this->Html->link(__('Back to Courses'), array('action' => 'index')); ?></h4></div>
    <div class="col-md-8 text-center"><h2><?php echo $course['Course']['title'];?></h2></div>
    <?php if($course['Course']['master'] == null || $user['Group']['name'] == 'Admin'):?>
    <div class="col-md-2"><h4><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete %s?', $course['Course']['title'])); ?></h4></div>
    <?php endif;?>
</div>
<?php $this->end(); ?>

<?php $this->start('course level info'); ?>
        <p><?php echo h($course['Course']['intro']); ?></p>
                                        <?php if ($course['Course']['master'] == null || $user['Group']['name'] == 'Admin'): ?>
                                    <p class="text-right"><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $course['Course']['id']), array('class' => 'btn btn-primary btn-sm')); ?></p>
                                <?php endif; ?>
<?php $this->end(); ?>
        
<?php $this->start('sessions'); ?>
<div class="panel panel-success panel-body">
    <div class="panel-body">
        <div class="col-md-10">
            <h3 class="text-info">Sessions</h3>
        </div>
        <div class="col-md-2">
            <?php if($course['Course']['master'] == null || $user['Group']['name'] == 'Admin'):?>
            <h3><?php echo $this->Html->link(__('Add Session'), array('controller' => 'sections', 'action' => 'add/' . $course['Course']['id']), array('class' => 'btn btn-success btn-sm btn-block')); ?></h3>
            <?php endif;?>
        </div>
    </div>

    <div class="row">
        <div class="container col-md-12">
            <?php foreach ($course['Section']as $section): ?>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Session <?php echo $section['number'] ?></h3>
                            </div>
                            <div class="panel-body">
                                <div style="height:50px;"
                                     <p class="text-success">
                                        <strong><?php echo $this->Html->link($section['title'], array('controller' => 'sections', 'action' => 'view', $section['id'])); ?></strong>
                                    </p>
                                </div>
                                <div style="height: 200px; overflow-y: scroll;">
                                    <p><?php echo $section['intro'] ?>
                                    </p>
                                </div>
                                <div style="padding: 0 0 5px 0; border-top: 1px #CDCDCD solid; border-bottom: 1px #11866f solid;">
                                    <h3 class="text-center">
                                        <?php if($course['Course']['master'] == null || $user['Group']['name'] == 'Admin'):?>
                                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id']), array('class' => 'btn btn-default btn-sm')); ?>
                                        <?php endif;?>
                                            <?php echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $section['id']), array('class' => 'btn btn-default btn-sm')); ?>
                                        <?php echo $this->Html->link(__('Outline'), array('controller' => 'sections', 'action' => 'outline', $section['id']), array('class' => 'btn btn-default btn-sm')); ?>
                                        <?php if($course['Course']['master'] == null || $user['Group']['name'] == 'Admin'):?>
                                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete', $section['id'], $section['Course']['id']), array('class' => 'btn btn-danger btn-sm'), __('Are you sure you want to delete %s Session %s: %s?', $course['Course']['title'], $section['number'], $section['title'])); ?>
                                        <?php endif;?>
                                    </h3>
                                </div>
                                <div style="height: 150px;">
                                    <h4 class="text-center"><span class="text-info">Activities</span></h4>
                                    <ul class="nav nav-pills">
                                        <?php foreach ($section['Activity']as $activity): ?>
                                            <div class="col-md-4">
                                                <li>
                                                    <?php echo $this->Html->image('icons/icon' . $activity['type_id'] . '.png', array('alt' => $activity['title'], 'url' => array('controller' => 'activities', 'action' => 'view', $activity['id']))); ?>
                                                </li>
                                            </div>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<?php $this->end(); ?>
<?php //$this->start('sessions');?>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Sessions (<?php echo count($course['Section']); ?>)
            <span class="pull-right"><?php echo $this->Html->link(__('Add Session'), array('controller' => 'sections', 'action' => 'add', $course['Course']['id'])); ?></span>
        </h3>
    </div>
    <div class="panel-body">

        <?php $firstsection = array_shift($course['Section']); ?>
        <div class="container-fluid col-md-12">
            <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="250000000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                    echo '<div class="item active">';
                    echo '<div>';
                    echo '<div class="container-fluid">';
                    echo '<div class="row">';
                    echo '<div class="col-md-12 panel panel-warning">';
                    echo '<h2 align="center">' . $firstsection['title'] . '</h2>';
                    echo '<p>' . $firstsection['intro'] . '</p>';
                    echo '<div class="btn-toolbar" role="toolbar">';
                    echo '<div class="btn-group btn-default btn-lg">';
                    echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $firstsection['id'], $course['Course']['id']));
                    echo '</div>';
                    echo '<div class="btn-group btn-default btn-lg">';
                    echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $firstsection['id'], $course['Course']['id']));
                    echo '</div>';
                    echo '<div class="btn-group btn-default btn-lg">';
                    echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete', $firstsection['id']), null, __('Are you sure you want to delete %s?', $firstsection['title']));
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    ?>
                    <?php foreach ($course['Section']as $section): ?>
                        <?php
                        echo '<div class="item">';
                        echo '<div>';
                        echo '<div class="container-fluid">';
                        echo '<div class="row">';
                        echo '<div class="col-md-12 panel panel-warning"">';
                        echo '<h2 align="center">' . $section['title'] . '</h2>';
                        echo '<p>' . $section['intro'] . '</p>';
                        echo '<div class="btn-toolbar" role="toolbar">';
                        echo '<div class="btn-group btn-default btn-lg">';
                        echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $section['id'], $course['Course']['id']));
                        echo '</div>';
                        echo '<div class="btn-group btn-default btn-lg">';
                        echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id'], $course['Course']['id']));
                        echo '</div>';
                        echo '<div class="btn-group btn-default btn-lg">';
                        echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete'), array('data' => array('courseid' => $course['Course']['id'])), __('Are you sure you want to delete %s?', $section['title']));
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        array_unshift($course['Section'], $firstsection);
                        ?>
                    <?php endforeach; ?>
                    <div class="controls">
                        <ul class="nav default">
                            <?php
                            for ($i = 0; $i < count($course['Section']); $i++) {
                                echo '<li data-target="#custom_carousel" data-slide-to="' . $i . '" class="active"><a href="#"><button class="btn btn-md btn-success"><strong>Session ' . ($i + 1) . '</strong></button></a></li>';
                            };
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>    









    </div>
</div>


<?php //$this->end();  ?>

<?php /*
  <div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
  <li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
  <li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
  <li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
  <li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
  <li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
  <li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
  </ul>
  </div>
  <h3><?php echo __('Sessions'); ?></h3>


  <div class="actions">
  <ul>
  <li><?php echo $this->Html->link(__('Add Session'), array('controller' => 'sections', 'action' => 'add', $course['Course']['id'])); ?> </li>
  </ul>
  </div>
  </div>
 * */
?>
