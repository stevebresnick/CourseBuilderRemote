<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap');
        echo $this->Html->css('dashboard');
        echo $this->Html->css('print');

        echo $this->Html->script('jquery');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('collapse');
        echo $this->Html->script('outline');
        echo $this->Html->script('coursebuilder');
        echo $this->Html->script('courseapp');
        ?>
        <title><?php echo $this->fetch('pagetitle'); ?></title>

        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">


        <!-- Bootstrap -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
            <!---<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>--->

    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3 class="text-info">Welcome, <?php echo h($_SESSION['Auth']['User']['username']); ?>!</h3>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="printscreen">

                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="col-md-2 hashtag-nav-head">
                <!-----USER INFORMATION----->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            User Information
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-success panel-body">
                            <p class="text-success">Username: </p>
                            <p><?php echo($_SESSION['Auth']['User']['username']); ?></p>
                        </div>
                        <div class="panel panel-success panel-body">
                            <p class="text-success">Permissions Group:</p>
                            <p><?php echo($_SESSION['Auth']['User']['Group']['name']); ?></p>
                        </div>
                        <?php echo $this->fetch('controlleraction'); ?>
                        <?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), array('class' => 'btn btn-sm btn-danger btn-block')); ?>
                    </div>
                    <!----->
                </div>
                <?php echo $this->fetch('controls'); ?>
                <?php echo $this->fetch('resourcecontrols'); ?>
            </div>
            <div class="col-md-10 hashtag-nav-head">
                <div class="col-md-12">
                    <?php echo $this->fetch('mycourses'); ?>
                </div>
                <div class="col-md-12">
                    <?php echo $this->fetch('mastercourses'); ?>
                </div>
                <?php echo $this->fetch('resources'); ?>
                <?php echo $this->fetch('sessionsandactivities'); ?>
            </div>

            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
    </body>
</html>
