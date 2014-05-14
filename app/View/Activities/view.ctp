<?php $this->start('sessiontitle'); ?>
<?php //echo $this->Html->image('sessiontiles/sessiontile'.$activity[0]['Section']['number'].'.png', array('style'=>'margin-right: 10px', 'width'=>'30', 'height'=>'30'));  ?>
<?php echo $this->Html->link('Session ' . $activity['Section']['number'] . ': ' . $activity['Section']['title'], array('controller' => 'sections', 'action' => 'view', $activity['Section']['id'])); ?>
<?php $this->end(); ?>

<?php $this->start('activitytitle'); ?>
<?php echo $this->Html->link($activity['Activity']['title'], array('controller' => 'activities', 'action' => 'view', $activity['Activity']['id'])); ?>
<?php $this->end(); ?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $activity['Section']['course_id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Preview', array('action' => 'preview', $activity['Activity']['id']), array('class' => 'btn btn-md btn-default btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Session' . $activity['Section']['number'], array('controller' => 'sections', 'action' => 'view', $activity['Section']['id']), array('class' => 'btn btn-md btn-warning btn-block'))); ?>
<?php $this->end(); ?>

<?php $this->start('activities'); ?>
<div class="panel panel-info panel-body" style="background:#fffbd9;">
    <div class="panel panel-success panel-body">
        <div class="col-md-2" style="height:350px;">
            <p class="text-center"><?php echo $this->Html->image('icons/icon' . $activity['Activity']['type_id'] . '.png', array('style' => 'margin-right: 10px', 'width' => '100', 'height' => '100')); ?></p>
            <p class="text-center text-info"><?php echo $activity['Type']['type'] . ' Activity'; ?></p>
            <?php
            if ($activity['Activity']['required']) {
                echo '<p class="text-center text-danger">*This is a required activity</p>';
            } else {
                echo '<p class="text-center text-default">*This is an optional activity</p>';
            };
            ?>
            <p class="text-center">
            <?php if($activity['Section']['Course']['master'] == null || $user['Group']['name'] == 'Admin'):?>
                <?php echo $this->Html->link(__('Edit Activity'), array('action' => 'edit', $activity['Activity']['id']), array('class' => 'btn btn-warning btn-block btn-xs')); ?>
                <?php echo $this->Html->link(__('Activity Goals'), array('controller' => 'goals', 'action' => 'add', $activity['Activity']['id']), array('class' => 'btn btn-success btn-block btn-xs')); ?>
                <?php echo $this->Html->link(__('Activity Procedure'), array('controller' => 'steps', 'action' => 'add', $activity['Activity']['id']), array('class' => 'btn btn-info btn-block btn-xs')); ?>
                <?php echo $this->Html->link(__('Add Discussion'), array('controller' => 'discussions', 'action' => 'add', $activity['Activity']['id']), array('class' => 'btn btn-primary btn-block btn-xs')); ?>
                <?php echo $this->Html->link(__('Add Resource'), array('controller' => 'resources', 'action' => 'add', $activity['Section']['id'], $activity['Activity']['id']), array('class' => 'btn btn-danger btn-block btn-xs')); ?>
            <?php endif;?>
                <?php echo $this->Html->link(__('Preview Activity'), array('action' => 'preview', $activity['Activity']['id']), array('class' => 'btn btn-default btn-block btn-xs', 'target' => 'blank')); ?>
            </p>
        </div>
        <div class="col-md-6">
            <div>
                <div>
                    <h4 class="text-success"><strong>Brief Introduction:</strong></h4>
                </div>
                <div class="panel-body" style="height:80px; overflow-y: hidden; overflow: scroll;">
                    <p><?php echo $activity['Activity']['introbrief']; ?></p>
                </div>
            </div>
            <div>
                <div>
                    <h4 class="text-success"><strong>Detailed Introduction:</strong></h4>
                </div>
                <div class="panel-body" style="height:190px; overflow-y: hidden; overflow: scroll;">
                    <p><?php echo $activity['Activity']['introdetailed']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-danger">
                <div class="panel panel-heading">
                    <h3 class="panel-title">Activity Resources (<?php echo count($activity['Resource']); ?>)
                        <?php if($activity['Section']['Course']['master'] == null || $user['Group']['name'] == 'Admin'):?>
                        <span class="text-muted"><?php echo $this->Html->link('Add Resource', array('controller' => 'resources', 'action' => 'add', $activity['Section']['id'], $activity['Activity']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></span></h3>
                        <?php endif;?>
                </div>
                <div class="panel-body" style="height:300px; overflow-y: hidden; overflow: scroll;">
                    <?php foreach ($activity['Resource'] as $resource): ?>
                        <div class="col-md-12 panel"> 
                            <div class="col-md-2">
                                <?php echo $this->Html->image('icons/icon' . $resource['type_id'] . '.png', array('width' => '30px', 'height' => '30px')); ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Html->link($resource['title'], array('controller' => 'resources', 'action' => 'view', $resource['id'], 1)); ?>
                            </div>
                            <?php if($activity['Section']['Course']['master'] == null || $user['Group']['name'] == 'Admin'):?>
                            <div class="col-md-4">
                                <?php echo $this->Html->link('Edit', array('controller' => 'resources', 'action' => 'edit', $resource['id'], $activity['Section']['id'], $activity['Activity']['id'],), array('class' => 'btn btn-xs btn-warning btn-block')); ?>
                                <?php echo $this->Html->link(__('Remove'), array('controller' => 'resources', 'action' => 'removefrom', $resource['id'], $activity['Section']['id'], $activity['Activity']['id']), array('class' => 'btn btn-xs btn-danger btn-block'), __('Are you sure you want to remove this resource?')); ?>
                            </div>
                            <?php endif;?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel panel-heading">
                    <h3 class="panel-title">Activity Goals <?php echo $this->Html->link('Add Goal', array('controller' => 'goals', 'action' => 'add', $activity['Activity']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></h3>
                </div>
                <div class="panel-body" style="height:200px; overflow-y: hidden; overflow: scroll;">
                    <ol>
                        <?php foreach ($activity['Goal'] as $goal): ?>
                            <div class="col-md-10">
                                <li>
                                    <?php echo $goal['goal']; ?>
                                </li>
                            </div>
                            <div class="col-md-2">
                                <p><?php echo $this->Html->link(__('Edit'), array('controller' => 'goals', 'action' => 'edit', $goal['id'], $goal['activity_id']), array('class' => 'btn btn-xs btn-warning')); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel panel-heading">
                    <h3 class="panel-title">Activity Procedure <?php echo $this->Html->link('Add Step', array('controller' => 'steps', 'action' => 'add', $activity['Activity']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></h3>
                </div>
                <div class="panel-body" style="height:200px; overflow-y: hidden; overflow: scroll;">
                    <ol>
                        <?php foreach ($activity['Step'] as $step): ?>
                            <div class="col-md-10">
                                <li>
                                    <?php echo $step['procedureStep']; ?>
                                </li>
                            </div>
                            <div class="col-md-2">
                                <p><?php echo $this->Html->link(__('Edit'), array('controller' => 'steps', 'action' => 'edit', $step['id'], $step['activity_id']), array('class' => 'btn btn-xs btn-warning')); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <h3 class="panel-title">Discussions (<?php echo count($activity['Discussion']); ?>) <?php echo $this->Html->link('Add Discussion', array('controller' => 'discussions', 'action' => 'add', $activity['Activity']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></h3>
                </div>
                <div class="panel-body" style="height:200px; overflow-y: hidden; overflow: scroll;">   
                    <?php foreach ($activity['Discussion'] as $discussion): ?>
                        <div class="col-md-10">
                            <?php echo $this->Html->link($discussion['title'], array('controller' => 'discussions', 'action' => 'view', $discussion['id'])); ?>
                        </div>
                        <div class="col-md-2">
                            <p><?php echo $this->Html->link(__('Edit'), array('controller' => 'discussions', 'action' => 'edit', $discussion['id'], $discussion['activity_id']), array('class' => 'btn btn-xs btn-warning')); ?></p>
                        </div>
                        <div class="col-md-12">
                            <hr/>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>

<div class="activities view">

    <h2><?php echo __('Activity'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($activity['Activity']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Section'); ?></dt>
        <dd>
            <?php echo $this->Html->link($activity['Section']['title'], array('controller' => 'sections', 'action' => 'view', $activity['Section']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Required'); ?></dt>
        <dd>
            <?php echo h($activity['Activity']['required']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Title'); ?></dt>
        <dd>
            <?php echo h($activity['Activity']['title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Introbrief'); ?></dt>
        <dd>
            <?php echo h($activity['Activity']['introbrief']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Introdetailed'); ?></dt>
        <dd>
            <?php echo h($activity['Activity']['introdetailed']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Type'); ?></dt>
        <dd>
            <?php echo $this->Html->link($activity['Type']['type'], array('controller' => 'types', 'action' => 'view', $activity['Type']['id'])); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Activity'), array('action' => 'edit', $activity['Activity']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Activity'), array('action' => 'delete', $activity['Activity']['id']), null, __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Discussions'), array('controller' => 'discussions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Discussion'), array('controller' => 'discussions', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Goals'), array('controller' => 'goals', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Goal'), array('controller' => 'goals', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Steps'), array('controller' => 'steps', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Resources'), array('controller' => 'resources', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Resource'), array('controller' => 'resources', 'action' => 'add')); ?> </li>
    </ul>
</div>
<?php $this->end(); ?>
<?php //$this->start('discussions'); ?>
<div class="related">
    <h3><?php echo __('Related Discussions'); ?></h3>
    <?php if (!empty($activity['Discussion'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Title'); ?></th>
                <th><?php echo __('Intro'); ?></th>
                <th><?php echo __('Prompt'); ?></th>
                <th><?php echo __('Activity Id'); ?></th>
                <th><?php echo __('Section Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($activity['Discussion'] as $discussion):
                ?>
                <tr>
                    <td><?php echo $discussion['id']; ?></td>
                    <td><?php echo $discussion['title']; ?></td>
                    <td><?php echo $discussion['intro']; ?></td>
                    <td><?php echo $discussion['prompt']; ?></td>
                    <td><?php echo $discussion['activity_id']; ?></td>
                    <td><?php echo $discussion['section_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'discussions', 'action' => 'view', $discussion['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'discussions', 'action' => 'edit', $discussion['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'discussions', 'action' => 'delete', $discussion['id']), null, __('Are you sure you want to delete # %s?', $discussion['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Discussion'), array('controller' => 'discussions', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<?php $this->end(); ?>
<div class="related">
    <h3><?php echo __('Related Goals'); ?></h3>
    <?php if (!empty($activity['Goal'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Activity Id'); ?></th>
                <th><?php echo __('Goal'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($activity['Goal'] as $goal):
                ?>
                <tr>
                    <td><?php echo $goal['id']; ?></td>
                    <td><?php echo $goal['activity_id']; ?></td>
                    <td><?php echo $goal['goal']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'goals', 'action' => 'view', $goal['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'goals', 'action' => 'edit', $goal['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'goals', 'action' => 'delete', $goal['id']), null, __('Are you sure you want to delete # %s?', $goal['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Goal'), array('controller' => 'goals', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Steps'); ?></h3>
    <?php if (!empty($activity['Step'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Activity Id'); ?></th>
                <th><?php echo __('PrecedureStep'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($activity['Step'] as $step):
                ?>
                <tr>
                    <td><?php echo $step['id']; ?></td>
                    <td><?php echo $step['activity_id']; ?></td>
                    <td><?php echo $step['precedureStep']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'steps', 'action' => 'view', $step['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'steps', 'action' => 'edit', $step['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'steps', 'action' => 'delete', $step['id']), null, __('Are you sure you want to delete # %s?', $step['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Step'), array('controller' => 'steps', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Resources'); ?></h3>
    <?php if (!empty($activity['Resource'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Title'); ?></th>
                <th><?php echo __('Type Id'); ?></th>
                <th><?php echo __('Path'); ?></th>
                <th><?php echo __('Description'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($activity['Resource'] as $resource):
                ?>
                <tr>
                    <td><?php echo $resource['id']; ?></td>
                    <td><?php echo $resource['title']; ?></td>
                    <td><?php echo $resource['type_id']; ?></td>
                    <td><?php echo $resource['path']; ?></td>
                    <td><?php echo $resource['description']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'resources', 'action' => 'view', $resource['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'resources', 'action' => 'edit', $resource['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'resources', 'action' => 'delete', $resource['id']), null, __('Are you sure you want to delete # %s?', $resource['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Resource'), array('controller' => 'resources', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>

