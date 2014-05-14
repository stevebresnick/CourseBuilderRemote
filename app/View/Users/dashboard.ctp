<?php $this->start('dashboard-heading'); ?>
<h3 class="text-info">Welcome, <?php echo h($user['username']); ?>!</h3>
<?php $this->end(); ?>

<?php $this->start('userinformation'); ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            User Information
        </h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-success panel-body">
            <p class="text-success">Username: </p>
            <p><?php echo($user['username']); ?></p>
        </div>
        <div class="panel panel-success panel-body">
            <p class="text-success">Permissions Group:</p>
            <p><?php echo($user['Group']['name']); ?></p>
        </div>
        <?php $this->start('controlleraction');?>
        <?php echo $this->Html->link('Edit Profile', array('action' => 'edit', $user['id']), array('class' => 'btn btn-sm btn-info btn-block')); ?>
        <?php $this->end();?>
        
        <?php echo $this->Html->link('Logout', array('action' => 'logout'), array('class' => 'btn btn-sm btn-danger btn-block')); ?>
    </div>
</div>
<?php $this->end(); ?>

<?php $this->start('controls'); ?>
<div class="panel panel-primary panel-body">
    <?php if ($user['Group']['id'] == 3): ?>
        <?php echo $this->Html->link('Edit Users', array('action' => 'index'), array('class' => 'btn btn-sm btn-success btn-block')); ?>
        <?php echo $this->Html->link('Add Course', array('controller' => 'courses', 'action' => 'add'), array('class' => 'btn btn-sm btn-info btn-block')); ?>
        <?php echo $this->Html->link('Create Master', array('controller' => 'courses', 'action' => 'add', '1'), array('class' => 'btn btn-sm btn-primary btn-block')); ?>
    <?php endif; ?>
    <?php if ($user['Group']['id'] == 4): ?>
        <?php echo $this->Html->link('New Course', array('controller'=>'courses', 'action' => 'add'), array('class' => 'btn btn-sm btn-success btn-block')); ?>
    <?php endif; ?>
    <?php echo $this->Html->link('View Resources', array('controller'=>'resources',  'action' => 'index'), array('class' => 'btn btn-sm btn-warning btn-block')); ?>
</div>
<?php $this->end(); ?>

<?php $this->start('mycourses'); ?>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">
            My Courses
        </h3>
    </div>
    <div class="panel-body mycourses">
        <!----FOREACH MY COURSES----->
        <?php foreach ($coursesbyuser['Course'] as $course): ?>
            <div class="well">
                <a id="toggler" href="#" data-toggle="collapse" class="inactive" data-target="#<?php echo $course['id'];?>">
                    <i class="icon-folder-open"></i>
                    <i class="icon-folder-close"></i>
                    <?php echo $course['title']; ?>
                </a>

                <div id="<?php echo $course['id'];?>" class="collapse">
                    <ul class="nav nav-list">
                        <li class="nav-header"><?php echo $this->Html->link(__('Course Homepage'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?></li>
                        <li class="nav-header">Sessions</li>
                        <ul>
                            <?php foreach ($course['Section'] as $section): ?>
                                <li><?php echo $this->Html->link('Session ' . $section['number'] . ': ' . $section['title'], array('controller' => 'sections', 'action' => 'view', $section['id'])); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
        <!------------>
    </div>
</div>
<?php $this->end(); ?>

<?php $this->start('mastercourses'); ?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">
            Master Courses
        </h3>
    </div>
    <div class="panel-body mastercourses">
        <?php foreach ($mastercourses as $mastercourse): ?>
            <div class="well">
                <a id="toggler" href="#" data-toggle="collapse" class="inactive" data-target="#demo">
                    <i class="icon-folder-open"></i>
                    <i class="icon-folder-close"></i>
                    <?php echo $this->Html->link($mastercourse['Course']['title'], array('controller' => 'courses', 'action' => 'view', $mastercourse['Course']['id'])); ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <?php $this->end(); ?>


    <div class="container">
        <?php $this->start('dashboard-content'); ?>
    </div>
    <div class="col-md-2">
        <h2>Actions</h2>
        <p>Stuff Here</p>
    </div>
    <div class="col-md-10">
        <div class="col-md-12">
            <h2>My Courses</h2>
            <pre>
                <?php print_r($coursesbyuser); ?>
            </pre>
        </div>
        <div class="col-md-12">
            <h2>All Courses</h2>
            <pre>
                <?php print_r($allcourses); ?>
            </pre>
        </div>
    </div>
    <h1>All Courses</h1>
</div>
<div class="col-md-12">
    <h1>Courses by User</h1>
</div>
<?php $this->end(); ?>