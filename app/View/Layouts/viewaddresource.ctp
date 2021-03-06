<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Html->meta('icon');
        echo $this->Html->css('bootstrap.min');
                echo $this->Html->script('jquery');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('tooltip');
        echo $this->Html->script('popover');
        echo $this->Html->script('coursebuilder');
        ?>
    <title>Facing History Coursebuilder: <?php echo $this->fetch('coursetitle');?></title>

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
                <h1 class="text-center"><?php echo $this->fetch('coursetitle');?></h1>
            </div>
            <div class="col-md-3">
                <div class="col-md-10">
                    <div class="btn-group-vertical col-md-12">
                        <?php echo $this->fetch('navigation');?>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="container-fluid">
                <h2><?php echo __('Resources'); ?></h2>
                <div class="panel panel-info panel-body col-md-8">
                    <?php echo $this->fetch('resources'); ?>
                </div>
                    <!---------COURSES END-------------->
                    <?php echo $this->fetch('sessions'); ?>
                    <?php echo $this->fetch('actions'); //THIS IS IN THE SESSSIONS INDEX VIEW FILE and VIEW VIEW FILE//?>
            </div>
        </div>
        <div class="footer">
        </div>
    </div>
</body>
</html>