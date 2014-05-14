<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Html->meta('icon');
        
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
        <!---<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>--->
        <script src="http://www.stevebresnick.com/facing_history/coursebuilder/js/jquery.js"></script>
        <script src="http://www.stevebresnick.com/facing_history/coursebuilder/js/bootstrap.min.js"></script>
        <script src="http://www.stevebresnick.com/facing_history/coursebuilder/js/coursebuilder.js"></script>
        <script src="http://www.stevebresnick.com/facing_history/coursebuilder/js/collapse.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img class="img-thumbnail" src="http://www.bresnickenglish.net/facinghistory/images/logo.png" />
            </div>
            <div class="col-md-6">
                <h2 class="text-center"><?php echo $this->fetch('sessiontitle');?></h2>
                <h3 class="text-center"><span class="text-info"><?php echo $this->fetch('activitytype');?></span><span class="text-info"><?php echo $this->fetch('activitytitle');?></span></h3>
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
        <?php echo $this->Session->flash(); ?>
        <div class="row">
            <div class="container">
                <div class="well col-md-12">
                    <!---------COURSES START------------>
                    <?php echo $this->fetch('courses'); ?>
                    <!---------COURSES END-------------->
                    <?php echo $this->fetch('session'); ?>
                    <?php echo $this->fetch('overview'); ?>
                    <?php echo $this->fetch('essentialquestions'); ?>
                    <?php echo $this->fetch('activities'); ?>
                    <?php echo $this->fetch('goals'); ?>
                    <?php echo $this->fetch('procedure'); ?>
                    <?php echo $this->fetch('discussions'); ?>
                    <?php echo $this->fetch('resources'); ?>
        <div class="footer">
        </div>
                </div>
    </div>
</body>
</html>