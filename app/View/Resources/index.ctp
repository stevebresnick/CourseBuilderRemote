<?php $this->start('resources'); ?>


<?php if (!empty($currentsection)): ?>
    <p class="text-center text-info">
        <?php echo $currentsection['Course']['title']; ?>
    </p>
    <p class="text-center text-success">
        Session <?php echo $currentsection['Section']['number']; ?>
    </p>
<?php endif; ?>

<?php if (!empty($currentactivity)): ?>
    <p class="text-center text-warning">
        <?php echo $currentactivity['Activity']['title']; ?>
    </p>
<?php endif; ?>

<?php
if (empty($currentsection)) {
    echo 'Session not set';
};
?>

<!---div class="resources index"--->
<table cellpadding="5" cellspacing="20" class="table table-bordered">
    <tr>
        <th><?php echo $this->Paginator->sort('type_id', 'Type'); ?></th>
        <th><?php echo $this->Paginator->sort('title'); ?></th>
        <th>Description</th>
        <th>Found In:</th>
        <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($resources as $resource): ?>
        <?php $resourceSection = null; ///DEFINE Session or Activity id regardless of whether the resource is part of an activity or session.
        $resourceActivity = null; ?>
        <?php
        foreach ($resource['Section'] as $section) {
            $resourceSection = $section['id'];
        };
        ?>
    <?php
    foreach ($resource['Activity'] as $activity) {
        $resourceActivity = $activity['id'];
    };
    ?>

        <tr style="height: 150px;">
            <td>
    <?php echo $this->Html->image('icons/icon' . $resource['Type']['id'] . '.png'); ?>
            </td>
            <td>
                <table width="200px" class="table">
                    <tbody>
                        <tr>
                            <td><?php echo $this->Html->link($resource['Resource']['title'], array('action' => 'view', $resource['Resource']['id'])); ?></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td>
                <button type="button" class="btn btn-sm btn-info resourcedescription" data-container="body" data-toggle="popover" data-content="<?php echo h($resource['Resource']['description']); ?>">
                    View Description
                </button>
            </td>
            </td>
            <td>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <?php
                                if (!empty($resource['Section'])) {
                                    echo '<ul>';
                                    foreach ($resource['Section'] as $section) {
                                        echo '<li>'.$this->Html->link($section['Course']['title'], array('controller' => 'sections', 'action' => 'view', $section['id'])) . '</li><ul>';
                                        echo '<li>'.$this->Html->link('Session: ' . $section['number'], array('controller' => 'sections', 'action' => 'view', $section['id'])) . '</li></ul>';
                                    };
                                } elseif (!empty($resource['Activity'])) {
                                    echo '<ul>';
                                    foreach ($resource['Activity'] as $activity) {
                                        echo '<li>'.$this->Html->link($course[$activity['Section']['course_id']], array('controller' => 'activities', 'action' => 'view', $activity['id'])) . '</li><ul>';
                                        echo '<li>'.$this->Html->link('Session ' . $activity['Section']['number'], array('controller' => 'activities', 'action' => 'view', $activity['id'])) . '</li><ul>';
                                        echo '<li>'.$this->Html->link('Activity: ' . $activity['title'], array('controller' => 'activities', 'action' => 'view', $activity['id'])) . '</li></ul></ul></ul>';
                                    }
                                } else {
                                    echo 'none';
                                };
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td>
                <?php
                if (!empty($resource['Section'])) {
                                    foreach ($resource['Section'] as $section) {
                                        echo $this->Html->link('Edit/Session '.$section['number'], array('action' => 'edit', $resource['Resource']['id'], $section['id'])) . '<br/>';
                                        //echo $this->Html->link('Session: ' . $section['number'], array('controller' => 'sections', 'action' => 'view', $section['id']));
                                    }
                                } elseif (!empty($resource['Activity'])) {
                                    foreach ($resource['Activity'] as $activity) {
                                        echo $this->Html->link('Edit', array('action' => 'edit', $resource['Resource']['id'], $activity['Section']['id'], $activity['id'])) . '<br/>';
                                        //echo $this->Html->link('Session ' . $activity['Section']['number'], array('controller' => 'sections', 'action' => 'view', $activity['Section']['id'])) . '<br/>';
                                        //echo $this->Html->link('Activity: ' . $activity['id'], array('controller' => 'activities', 'action' => 'view', $activity['id'])) . '<br/>';
                                    }
                                } else {
                                        echo $this->Html->link('Edit', array('action' => 'edit', $resource['Resource']['id'])) . '<br/>';
                                };
                if (empty($currentactivity)) {
                    if (empty($currentsection)) { //if resource has no session or activity
                        echo $this->Html->link('Add To Activity or Session', array('action' => 'addto', $resource['Resource']['id']), array('class'=>'btn btn-xs btn-success')) . '<br/>';
                    } elseif (empty ($resource['Section'])) {
                        echo $this->Html->link('Add To Session', array('action' => 'addto',$resource['Resource']['id'], $currentsection['Section']['id']), array('class'=>'btn btn-xs btn-success')) . '<br/>';
                    } else { //else it's a session level activity
                        foreach ($resource['Section'] as $section) {
                            if ($section['id'] == $currentsection['Section']['id']) {
                                echo $this->Html->image('icons/checkbox.png').'<br/>';
                            } else {
                                echo $this->Html->link('Add To Session '.$currentsection['Section']['number'], array('action' => 'addto',$resource['Resource']['id'], $currentsection['Section']['id']), array('class'=>'btn btn-xs btn-success')) . '<br/>';
                            }
                        };
                        }
                } else { //Else it's an activity level resource
                    foreach ($resource['Activity'] as $activity) {
                        if ($activity['id'] == $currentactivity['Activity']['id']) {
                            echo $this->Html->image('icons/checkbox.png').'<br/>';
                        } else {
                        echo $this->Html->link('Add To Activity', array('action' => 'addto',$resource['Resource']['id'], $currentsection['Section']['id'], $currentactivity['Activity']['id']), array('class'=>'btn btn-xs btn-success')) . '<br/>';
                        }
                    };
                    if (empty($resource['Activity'])) {
                        echo $this->Html->link('Add To Activity', array('action' => 'addto',$resource['Resource']['id'], $currentsection['Section']['id'], $currentactivity['Activity']['id']), array('class'=>'btn btn-xs btn-success')) . '<br/>';
             
                    };
                }
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
));
?>	</p>

<div class="paging">
<?php
echo $this->Paginator->prev('<   ' . __('previous'), array(), null, array('class' => 'prev disabled'));
echo $this->Paginator->numbers(array('separator' => '   '));
echo $this->Paginator->next(__('next') . '   >', array(), null, array('class' => 'next disabled'));
?>
</div>
<!---/div----->
<?php $this->end(); ?>

<?php $this->start('controlleraction'); ?>
        <?php echo $this->Html->link('User Dashboard', array('controller' => 'users', 'action' => 'dashboard', $_SESSION['Auth']['User']['id']), array('class' => 'btn btn-sm btn-info btn-block')); ?>
        <?php $this->end(); ?>

<?php $this->start('resourcecontrols'); ?>
<div class="panel panel-warning">
    <div class="panel-body">
<?php echo $this->Html->link('Add Resource', array('action' => 'add'), array('class' => 'btn btn-sm btn-warning btn-block')); ?>
    </div>
</div>
<?php $this->end(); ?>

<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Resource'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
    </ul>
</div>
