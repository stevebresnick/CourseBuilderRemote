<?php $this->extend('/Common/courseview');?>
<!------PRETTY SURE EVERYTHING BELOW HERE IS IGNORED--------->
<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076å
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $courseTitle; ?>:
            <?php echo $callnumber;?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->script('jquery');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('collapse');
        echo $this->Html->script('dropdown');
        echo $this->Html->script('tabbedslidercarousel');
        echo $this->Html->script('transition');
        
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('tabbedslidercarousel');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div class="container">
            <div class="container">
                <div class="col-md-2"><h4><?php echo $this->Html->link(__('Back to Courses'), array('action' => 'index')); ?></h4></div>
                <div class="col-md-8 text-center"><h2><?php echo $courseTitle;?></h2></div>
                <div class="col-md-2"><h4><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete %s?', $course['Course']['title'])); ?></h4></div>
            </div>
            <!----------------->
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
<?php //echo $this->element('sql_dump');  ?>
        </div>
    </body>
</html>