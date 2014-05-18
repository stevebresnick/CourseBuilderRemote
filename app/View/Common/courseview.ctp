<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Html->meta('icon');

        echo $this->Html->script('jquery');
        echo $this->Html->css('bootstrap.min');
        ?>
        <title>Facing History Coursebuilder</title>

        <!-- Bootstrap -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-thumbnail" src="http://www.bresnickenglish.net/facinghistory/images/logo.png" />
                </div>
                <div class="col-md-6">
                    <h1 class="text-center"><?php echo $this->Html->link($course['Course']['title'], array('controller' => 'courses', 'action' => 'view', $course['Course']['id'])); ?></h1>
                </div>
                <div class="col-md-3">
                    <div class="col-md-10">
                        <div class="btn-group-vertical col-md-12">
                            <?php echo $this->Html->div('col-md-12', $this->Html->link(__('User Dashboard'), array('controller' => 'users', 'action' => 'dashboard'), array('class' => 'btn btn-success btn-md btn-block'))); ?>
                            <?php echo $this->Html->div('col-md-12', $this->Html->link(__('View Outline'), array('action' => 'outline', $course['Course']['id']), array('class' => 'btn btn-default btn-md btn-block'))); ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="container">
                    <div class="well">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo __('Course Introduction'); ?></h3>
                            </div>
                            <div class="panel-body">
                                <?php echo $this->fetch('course level info'); ?>
                            </div>
                        </div>
                        <?php echo $this->fetch('sessions'); ?>
                        <?php echo $this->fetch('test'); //THIS IS IN THE SESSSIONS INDEX VIEW FILE and VIEW VIEW FILE//?>
                    </div>
                </div>
            </div>
            <div class="footer">
            </div>
        </div>
    </body>
</html>