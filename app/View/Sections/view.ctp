<?php
//ARRAYS FOR ALL SESSION DISCUSSIONS AND RESOURCES

$alldiscussions = array();
foreach ($section['Activity'] as $activity) {
    foreach ($activity['Discussion'] as $discussion) {
        $alldiscussions[] = $discussion['title'];
    }
};

$allresources = array();
$activityresources = array();
$sessionresources = array();

foreach ($sessionActivity as $activity) {
    foreach ($activity['Resource'] as $activityresource) {
        $activityresources[$activityresource['id']] = $activityresource['id'];
    }
};
foreach ($sessionResource as $sessionresource) {
    $sessionresources[$sessionresource['id']] = $sessionresource['id'];
};

$allresourceids = array_unique(array_merge($activityresources, $sessionresources));

foreach ($section['Resource'] as $sessresource) {
    $allresources[$sessresource ['id']] = array(
        'id' => $sessresource ['id'],
        'title' => $sessresource ['title'],
        'type_id' => $sessresource ['type_id'],
        'path' => $sessresource ['path'],
        'description' => $sessresource ['description'],
        'note' => $sessresource ['note']
    );
};

foreach ($section['Activity'] as $activities) {
    foreach ($activities['Resource'] as $actresource) {
        $allresources[$actresource ['id']] = array(
            'id' => $actresource ['id'],
            'title' => $actresource ['title'],
            'type_id' => $actresource ['type_id'],
            'path' => $actresource ['path'],
            'description' => $actresource ['description'],
            'note' => $actresource ['note']
        );
    }
};
?>


<?php $this->start('coursetitle'); ?>
<?php echo $this->Html->link($section['Course']['title'], array('controller' => 'courses', 'action' => 'view', $section['Course']['id'])); ?>
<?php $this->end(); ?>

<?php $this->start('sessiontitle'); ?>
<?php echo $this->Html->link('Session ' . $section['Section']['number'] . ': ' . $section['Section']['title'], array('controller' => 'sections', 'action' => 'view', $section['Section']['id'])); ?>
<?php $this->end(); ?>

<?php $this->start('navigation'); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $section['Course']['id']), array('class' => 'btn btn-md btn-success btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link(__('View Outline'), array('action' => 'outline', $section['Section']['id']), array('class' => 'btn btn-md btn-default btn-block'))); ?>
<?php echo $this->Html->div('col-md-12', $this->Html->link(__('Preview Session'), array('action' => 'preview', $section['Section']['id']), array('class' => 'btn btn-info btn-md btn-block', 'target' => 'blank'))); ?>
<?php $this->end(); ?>

<?php $this->start('session'); ?>
<div class="sections view">
    <div class="panel panel-success col-md-12 panel-body">
        <div class="col-md-12">
            <p class="text-center"><?php echo h($section['Section']['quote']); ?></p>
        </div>
        <div class="col-md-12">
            <p class="text-center">—<?php echo h($section['Section']['speaker']); ?> <?php echo h($section['Section']['year']); ?></p>
        </div>
        <div class="panel panel-info col-md-12 panel-body" style="background: #fffbd9;">
            <div class="col-md-2">
                <p class="text-center"><?php echo $this->Html->image('sessiontiles/sessiontile' . $section['Section']['number'] . '.png'); ?></p>
            </div>
            <div class="col-md-10">
                <h4 class="text-success"><strong><?php
                        echo 'Session ' . h($section['Section']['number']);
                        echo ': ' . h($section['Section']['title']);
                        ?></strong></h4>
                <p><?php echo h($section['Section']['intro']); ?></p>
                <?php if ($section['Course']['master'] == null || $user['Group']['name'] == 'Admin'): ?>
                    <p><?php echo $this->Html->div('col-md-12', $this->Html->link('Edit', array('controller' => 'sections', 'action' => 'edit', $section['Section']['id']), array('class' => 'btn btn-sm btn-info pull-right'))); ?></p>
                <?php endif; ?>
                <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] !== 'Admin'): ?>
                    <p><?php echo $this->Html->div('col-md-12', $this->Html->link('', array('controller' => 'sections', 'action' => 'view', $section['Section']['id']), array('class' => 'btn btn-sm btn-default pull-right'))); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-9">
                <p class="text-info">Click Titles to Expand</p>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#AddOverview">
                                    Session Overview
                                </a>
                                <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>
                                    <?php echo $this->Html->link(__('Add Paragraph'), array('controller' => 'overviews', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?>
                                <?php endif; ?>
                                <?php if ($section['Course']['master'] == null): ?>
                                    <?php echo $this->Html->link(__('Add Paragraph'), array('controller' => 'overviews', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?>                               
                                <?php endif; ?>
                            </h4>
                        </div>
                        <div id="AddOverview" class="panel-collapse collapse">
                            <div class="panel-body" style="height:200px; overflow-y: hidden; overflow: scroll;">
                                <?php foreach ($section['Overview'] as $overview): ?>
                                    <div class="panel-body">
                                        <div class="col-md-10">
                                            <p><?php echo $overview['paragraph']; ?></p>
                                        </div>
                                        <div class="col-md-2">
                                            <?php echo $this->Html->link(__('View'), array('controller' => 'overviews', 'action' => 'view', $overview['id']), array('class' => 'btn btn-xs btn-success btn-block')); ?>
                                            <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>
                                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'overviews', 'action' => 'edit', $overview['id'], $section['Section']['id']), array('class' => 'btn btn-xs btn-warning btn-block')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'overviews', 'action' => 'delete', $overview['id'], $section['Section']['id']), array('class' => 'btn btn-xs btn-danger btn-block'), __('Are you sure you want to delete this overview paragraph?')); ?>
                                            <?php endif; ?>
                                            <?php if ($section['Course']['master'] == null): ?>
                                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'overviews', 'action' => 'edit', $overview['id'], $section['Section']['id']), array('class' => 'btn btn-xs btn-warning btn-block')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'overviews', 'action' => 'delete', $overview['id'], $section['Section']['id']), array('class' => 'btn btn-xs btn-danger btn-block'), __('Are you sure you want to delete this overview paragraph?')); ?>                                            
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#AddQuestion">
                                    Essential Questions
                                </a>
                                <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>
                                    <?php echo $this->Html->link(__('Add Question'), array('controller' => 'essentialQuestions', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?>
                                <?php endif;?>
                                <?php if ($section['Course']['master'] == null): ?>
                                    <?php echo $this->Html->link(__('Add Question'), array('controller' => 'essentialQuestions', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?>                                
                                <?php endif;?>
                            </h4>
                        </div>
                        <div id="AddQuestion" class="panel-collapse collapse">
                            <div class="panel-body" style="height:100px; overflow-y: hidden; overflow: scroll;">
                                <div class="col-md-10">
                                    <ol>
                                        <?php foreach ($section['EssentialQuestion'] as $question): ?>
                                            <li><?php echo $question['question']; ?></li>
                                        <?php endforeach; ?>
                                    </ol>
                                </div>
                                <?php if (!empty($section['EssentialQuestion'])): ?>
                                    <div class="col-md-2">
                                        <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>
                                            <?php echo $this->Html->link(__('Edit Questions'), array('controller' => 'essentialQuestions', 'action' => 'edit', $question['id'], $section['Section']['id']), array('class' => 'btn btn-xs btn-warning btn-block')); ?>
                                        <?php endif;?>
                                        <?php if ($section['Course']['master'] == null): ?>
                                            <?php echo $this->Html->link(__('Edit Questions'), array('controller' => 'essentialQuestions', 'action' => 'edit', $question['id'], $section['Section']['id']), array('class' => 'btn btn-xs btn-warning btn-block')); ?>
                                        <?php endif;?>
                                    </div>
                                <?php endif; ?>
                                <?php if (empty($section['EssentialQuestion'])): ?>
                                    <div class="col-md-2">
                                <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>                                        
                                        <?php echo $this->Html->link(__('Add Questions'), array('controller' => 'essentialQuestions', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-xs btn-success btn-block')); ?>
                                <?php endif;?>
                                <?php if ($section['Course']['master'] == null): ?>
                                         <?php echo $this->Html->link(__('Add Questions'), array('controller' => 'essentialQuestions', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-xs btn-success btn-block')); ?>
                                <?php endif;?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#AddDiscussion">
                                    Discussions (<?php echo count($alldiscussions); ?>)
                                </a>
                            </h4>
                        </div>
                        <div id="AddDiscussion" class="panel-collapse collapse">
                            <div class="panel-body" style="height:200px; overflow-y: hidden; overflow: scroll;">
                                <div class="col-md-12">
                                    <?php
                                    $i = 0;
                                    foreach ($section['Activity'] as $activity):
                                        foreach ($activity['Discussion']as $discussion):
                                            ?>
                                            <div class="panel-body col-md-12">
                                                <div class="col-md-10">
                                                    <div class="col-md-12">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="col-md-2"><h5 class="text-info">Title: </h5></td>
                                                                    <td class="col-md-10"><h5><?php echo $discussion['title']; ?></h5></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-2"><h5 class="text-danger">Activity: </h5></td>
                                                                    <td class="col-md-10"><p><?php
                                                                            echo $this->Html->link($activity['title'], array('controller' => 'activities', 'action' => 'view', $activity['id']));
                                                                            ?></p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-2"><h5 class="text-success">Intro: </h5></td>
                                                                    <td class="col-md-10"><p><?php echo $discussion['intro']; ?></p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-2"><h5 class="text-warning">Prompt: </h5></td>
                                                                    <td class="col-md-10"><p><?php echo $discussion['prompt']; ?></p></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>
                                                    <div class="col-md-12">
                                                        <?php echo $this->Html->link(__('View'), array('controller' => 'discussions', 'action' => 'view', $discussion['id']), array('class' => 'btn btn-success btn-xs btn-block')); ?>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'discussions', 'action' => 'edit', $discussion['id']), array('class' => 'btn btn-warning btn-xs btn-block')); ?>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'discussions', 'action' => 'delete', $discussion['id']), array('class' => 'btn btn-danger btn-xs btn-block'), null, __('Are you sure you want to delete # %s?', $discussion['id'])); ?>
                                                    </div>
                                               <?php endif;?>
                                               <?php if ($section['Course']['master'] == null): ?>
                                                     <div class="col-md-12">
                                                        <?php echo $this->Html->link(__('View'), array('controller' => 'discussions', 'action' => 'view', $discussion['id']), array('class' => 'btn btn-success btn-xs btn-block')); ?>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'discussions', 'action' => 'edit', $discussion['id']), array('class' => 'btn btn-warning btn-xs btn-block')); ?>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'discussions', 'action' => 'delete', $discussion['id']), array('class' => 'btn btn-danger btn-xs btn-block'), null, __('Are you sure you want to delete # %s?', $discussion['id'])); ?>
                                                    </div>                                                   
                                               <?php endif;?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>                                              
                    </div>

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#AddResource">
                                    Session Resources (<?php echo count($allresources); ?>)
                                </a>
                             <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>   
                                <span class="text-muted"><?php echo $this->Html->link('Add Session Resource', array('controller' => 'resources', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></span>
                            <?php endif;?>
                            <?php if ($section['Course']['master'] == null): ?>
                                 <span class="text-muted"><?php echo $this->Html->link('Add Session Resource', array('controller' => 'resources', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></span>                               
                            <?php endif;?>
                            </h4>
                        </div>
                        <div id="AddResource" class="panel-collapse collapse">
                            <div class="panel-body" style="height:200px; overflow-y: hidden; overflow: scroll;">
                                <div class="col-md-5">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr class="success">
                                                <td>Session Level Resources</td>
                                            </tr>
                                            <?php foreach ($section['Resource'] as $resource): ?>
                                                <tr>
                                                    <td>
                                                        <div class="col-md-3">
                                                            <?php echo $this->Html->image('icons/icon' . $resource['type_id'] . '.png', array('width' => '30px', 'class' => 'img-thumbnail')); ?>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <?php echo $resource['title']; ?>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <?php echo $this->Html->link(__('View'), array('controller' => 'resources', 'action' => 'view', $resource['id']), array('class' => 'btn btn-xs btn-warning pull-right')); ?>
                                                        </div>
                                                    </td>                                                                            
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-7">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr class="success">
                                                <td>Activity Level Resources</td>
                                            </tr>
                                            <?php foreach ($section['Activity'] as $activity): ?>
                                                <tr>
                                                    <td><strong><?php echo $this->Html->link($activity['title'], array('controller' => 'activities', 'action' => 'view', $activity['id'])); ?></strong></td>
                                                </tr>
                                                <?php foreach ($activity['Resource'] as $resource): ?>                                               
                                                    <tr>
                                                        <td>
                                                            <div class="col-md-2">
                                                                <?php echo $this->Html->image('icons/icon' . $resource['type_id'] . '.png', array('width' => '30px', 'class' => 'img-thumbnail')); ?>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <?php echo $resource['title']; ?>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <?php echo $this->Html->link(__('View'), array('controller' => 'resources', 'action' => 'view', $resource['id']), array('class' => 'btn btn-xs btn-warning pull-right')); ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                                              
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <?php echo $this->Html->image('scopeandsequence/scope' . $section['Scope']['id'] . '.png', array('width' => 211, 'height' => 194)); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>

<h2><?php echo __('Section'); ?></h2>
<dl>
    <dt><?php echo __('Id'); ?></dt>
    <dd>
        <?php echo h($section['Section']['id']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Number'); ?></dt>
    <dd>
        <?php echo h($section['Section']['number']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Course'); ?></dt>
    <dd>
        <?php echo $this->Html->link($section['Course']['title'], array('controller' => 'courses', 'action' => 'view', $section['Course']['id'])); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Title'); ?></dt>
    <dd>
        <?php echo h($section['Section']['title']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Intro'); ?></dt>
    <dd>
        <?php echo h($section['Section']['intro']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Quote'); ?></dt>
    <dd>
        <?php echo h($section['Section']['quote']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Speaker'); ?></dt>
    <dd>
        <?php echo h($section['Section']['speaker']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Year'); ?></dt>
    <dd>
        <?php echo h($section['Section']['year']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Video'); ?></dt>
    <dd>
        <?php echo h($section['Section']['video']); ?>
        &nbsp;
    </dd>
</dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Section'), array('action' => 'edit', $section['Section']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Section'), array('action' => 'delete', $section['Section']['id']), null, __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Overviews'), array('controller' => 'overviews', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Overview'), array('controller' => 'overviews', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Discussions'), array('controller' => 'discussions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Discussion'), array('controller' => 'discussions', 'action' => 'add')); ?> </li>
    </ul>
</div>
<?php $this->start('activities'); ?>
<div class="col-md-12">
    <div class="col-md-10">
        <h4 class="text-success"><?php echo __('Session Activities'); ?>
            (<?php echo count($section['Activity']); ?>)
    </div>
    <div class="col-md-2">
 <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>          
        <?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-info btn-xs pull-right')); ?></h4>
   <?php endif;?>
  <?php if ($section['Course']['master'] == null): ?>   
         <?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add', $section['Section']['id']), array('class' => 'btn btn-info btn-xs pull-right')); ?></h4>
   <?php endif;?>  
    </div>
</div>
<div class="panel panel-success panel-body">
    <?php if (!empty($section['Activity'])): ?>
        <?php
        $i = 0;
        foreach ($section['Activity'] as $activity):
            ?>
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $activity['title'] ?></h3>
                        </div>
                        <div class="panel-body">

                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col-md-2">
                                        <?php echo $this->Html->image('icons/icon' . $activity['Type']['id'] . '.png', array('width' => '40px', 'height' => '40px')); ?>
                                    </div>
                                    <div class="col-md-8" style="height:100px; overflow-y: hidden; overflow: scroll;">
                                        <?php echo $activity['introbrief']; ?>
                                    </div>
  <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>                                    
                                    <div class="col-md-2">
                                        <?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'view', $activity['id']), array('class' => 'btn btn-success btn-xs btn-block')); ?>                                        
                                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'activities', 'action' => 'edit', $activity['id']), array('class' => 'btn btn-warning btn-xs btn-block')); ?>
                                        <?php echo $this->Html->link(__('Prvw'), array('controller' => 'activities', 'action' => 'preview', $activity['id']), array('class' => 'btn btn-primary btn-xs btn-block')); ?>
                                    </div>
  <?php endif;?>
  <?php if ($section['Course']['master'] == null || ($section['Course']['master'] == '1' && $user['Group']['name'] !== 'Admin')): ?>
                                      <div class="col-md-2">
                                        <?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'view', $activity['id']), array('class' => 'btn btn-success btn-xs btn-block')); ?>                                        
                                        <?php echo $this->Html->link(__('Prvw'), array('controller' => 'activities', 'action' => 'preview', $activity['id']), array('class' => 'btn btn-primary btn-xs btn-block')); ?>
                                      </div>                                  
  <?php endif;?>                                 
                                </div>
                            </div>

                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Discussions (<?php echo count($activity['Discussion']); ?>)
   <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>                                       
                                        <span class="text-muted"><?php echo $this->Html->link('Add Discussion', array('controller' => 'discussions', 'action' => 'add', $activity['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></span>
   <?php endif;?>
   <?php if ($section['Course']['master'] == null): ?>
                                         <span class="text-muted"><?php echo $this->Html->link('Add Discussion', array('controller' => 'discussions', 'action' => 'add', $activity['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></span>                                       
   <?php endif;?>                                 
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12" style="overflow-y:hidden; overflow: scroll; height: 100px;">
                                        <?php foreach ($activity['Discussion'] as $discussions): ?>
                                            <div class="panel-default">  
                                                <div class="col-md-10">
                                                    <?php echo $this->Html->image('icons/icon3.png', array('width' => '25px', 'class' => 'pull-left img-thumbnail')); ?>
                                                    <p><?php echo $this->Html->link($discussions['title'], array('controller' => 'discussions', 'action' => 'view', $discussions['id'])); ?></p>                                                
                                                </div>
                                                <div class="col-md-2">
 <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>                                                      
                                                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'discussions', 'action' => 'edit', $discussions['id'], $activity['id']), array('class' => 'btn btn-warning btn-xs btn-block')); ?>                                                
<?php endif;?>
<?php if ($section['Course']['master'] == null): ?>
                                                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'discussions', 'action' => 'edit', $discussions['id'], $activity['id']), array('class' => 'btn btn-warning btn-xs btn-block')); ?>                                                
<?php endif;?>                                                
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>    
                                </div>
                            </div>

                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        Resources (<?php echo count($activity['Resource']); ?>)
   <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>                                                                               
                                        <span class="text-muted"><?php echo $this->Html->link('Add Resource', array('controller' => 'resources', 'action' => 'add', $section['Section']['id'], $activity['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></span>                                   
   <?php endif;?>
   <?php if ($section['Course']['master'] == null): ?>
                                        <span class="text-muted"><?php echo $this->Html->link('Add Resource', array('controller' => 'resources', 'action' => 'add', $section['Section']['id'], $activity['id']), array('class' => 'btn btn-default btn-xs pull-right')); ?></span>                                                                           
   <?php endif;?>                                     
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12" style="overflow-y:hidden; overflow: scroll; height: 100px;">
                                        <?php foreach ($activity['Resource'] as $resource): ?>
                                            <div class="panel-default">  
                                                <div class="col-md-10">
                                                    <?php echo $this->Html->image('icons/icon' . $resource['type_id'] . '.png', array('width' => '25px', 'class' => 'pull-left img-thumbnail')); ?>
                                                    <p><?php echo $this->Html->link($resource['title'], array('controller' => 'resources', 'action' => 'view', $resource['id'])); ?></p>                                                
                                                </div>
                                                <div class="col-md-2">
   <?php if ($section['Course']['master'] == '1' && $user['Group']['name'] == 'Admin'): ?>                                                                                                                                   
                                                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'resources', 'action' => 'edit', $resource['id'], $section['Section']['id'], $activity['id']), array('class' => 'btn btn-warning btn-xs btn-block')); ?>
  <?php endif;?>
   <?php if ($section['Course']['master'] == null): ?>                                                    
                                                     <?php echo $this->Html->link(__('Edit'), array('controller' => 'resources', 'action' => 'edit', $resource['id'], $section['Section']['id'], $activity['id']), array('class' => 'btn btn-warning btn-xs btn-block')); ?>
 <?php endif;?>                                                  
                                                    
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div> 
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<?php $this->end(); ?>

<div class="related">
    <h3><?php echo __('Related Overviews'); ?></h3>
    <?php if (!empty($section['Overview'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Section Id'); ?></th>
                <th><?php echo __('Paragraph'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($section['Overview'] as $overview):
                ?>
                <tr>
                    <td><?php echo $overview['id']; ?></td>
                    <td><?php echo $overview['section_id']; ?></td>
                    <td><?php echo $overview['paragraph']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'overviews', 'action' => 'view', $overview['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'overviews', 'action' => 'edit', $overview['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'overviews', 'action' => 'delete', $overview['id']), null, __('Are you sure you want to delete # %s?', $overview['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Overview'), array('controller' => 'overviews', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>

<div class="related">
    <h3><?php echo __('Related Discussions'); ?></h3>
    <?php if (!empty($section['Discussion'])): ?>
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
            foreach ($section['Discussion'] as $discussion):
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
