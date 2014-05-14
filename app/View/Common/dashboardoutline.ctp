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
        ?>
    <title><?php echo $this->fetch('pagetitle');?></title>

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
        <script src="http://www.stevebresnick.com/facing_history/coursebuilder/js/collapse.js"></script>
        <script src="http://www.stevebresnick.com/facing_history/coursebuilder/js/outline.js"></script>

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
            <?php echo $this->fetch('coursetitle');?>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li id="printscreen"><a href="">Print</a></li>
              <li><?php echo $this->Html->link('Moodle Preview', array('controller'=>'sections', 'action'=>'preview',$section['Section']['id']));?></li>
              <li><a href="">HTML</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
          <?php echo $this->fetch('sidenavigation');?>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="sessionoutline">
            <?php echo $this->fetch('course');?>
            <?php echo $this->fetch('session');?>
          </div>
        </div>
      </div>
      <div id="printarea">
          <?php echo $this->fetch('printarea');?>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
