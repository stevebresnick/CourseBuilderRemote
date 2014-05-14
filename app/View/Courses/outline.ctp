<?php $this->start('coursetitle'); ?>
<?php echo $this->Html->link($course['Course']['title'], array('controller' => 'courses', 'action' => 'view', $course['Course']['id']), array('class' => 'navbar-brand')); ?>
<?php $this->end(); ?>

<?php $this->start('sidenavigation'); ?>
<div class="col-sm-3 col-md-2 sidebar" id="sidenav">
    <?php foreach($course['Section'] as $section):?>
    <ul class="list-group">
        <h5><a href="#session<?php echo $section['id'];?>">Session <?php echo '  '. $section['number'];?></a></h5>
        <ul class="list-group">    
        <li class="list-group-item">
                <a href="#activities<?php echo $section['id'];?>">Activities</a>
            </li>
            <li class="list-group-item">
                <a href="#resources<?php echo $section['id'];?>">Resources</a>
            </li>
        </ul>
    </ul>
    <?php endforeach;?>
    <h5><a href="#resources">Resources</a>
        <span class="badge pull-right">
            <?php $allresources = array();?>
            <?php foreach ($sections as $section):?>
                <?php foreach ($section['Activity'] as $activity):?>
                    <?php foreach($activity['Resource'] as $resource):?>
                        <?php $allresources[] = $resource;?>
                        <?php endforeach;?>
                <?php endforeach;?>
            <?php endforeach;?>
            <?php foreach ($course['Section'] as $section):?>
                <?php foreach ($section['Resource'] as $sessionresource):?>
                    <?php $allresources[] = $sessionresource;?>
                <?php endforeach;?>
            <?php endforeach;
            echo count($allresources);
            ?>
        </span></h5>
    <ul class="list-group">
        <?php foreach ($allresources as $resource):?>
            <li class="list-group-item"><a href="#resource<?php echo $resource['id'];?>"><?php echo $resource['title'];?></a></li>
        <?php endforeach;?>
    </ul>
</div>
<?php $this->end(); ?>

<?php $this->start('course'); ?>
<?php foreach($sections as $section):?>
<div class="col-md-10" id="session<?php echo $section['Section']['id'];?>">
    <h2 id="sessiontitle" class="text-success text-center hashtag-nav-head">Session <?php echo($section['Section']['number']); ?>: <?php echo($section['Section']['title']); ?></h2>
    <p class="text-center"><span class="text-info">Scope and Sequence:</span> <em><?php echo $section['Scope']['name']; ?></em></p>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-md-10 panel">
            <h4 id="quote" class="text-success hashtag-nav"><strong>Session Quote:</strong></h4>
            <p class="text-center"><?php echo $section['Section']['quote']; ?></p>
            <p class="text-center"><?php echo $section['Section']['speaker']; ?> <?php echo $section['Section']['year']; ?></p>
        </div>
        <div class="col-md-10 panel">
            <h4 id="intro" class="text-success hashtag-nav"><strong>Session Introduction:</strong></h4>
            <div class="panel-body">
                <p><?php echo $section['Section']['intro']; ?></p>
            </div>
        </div>
        <div class="col-md-10 panel">
            <h4 id="overview" class="text-success hashtag-nav"><strong>Session Overview:</strong></h4>
            <?php foreach ($section['Overview'] as $overviewparagraph): ?>
                <div class="panel-body"><p><?php echo $overviewparagraph['paragraph']; ?></p></div>
            <?php endforeach; ?>
        </div>
        <div class="col-md-10 panel">
            <h4 id="essentialquestions" class="text-success hashtag-nav"><strong>Essential Questions:</strong></h4>
            <div class="col-md-12">
                <ol>
                    <?php foreach ($section['EssentialQuestion'] as $question): ?>
                        <div>
                            <li><p><?php echo $question['question']; ?></p></li>
                        </div>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</div>
<h3 id="activities<?php echo $section['Section']['id'];?>" class="text-success hashtag-nav">
    <strong>Activities:</strong>
    <span class="badge"><?php echo count($section['Activity']); ?></span>
</h3>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-md-10 panel">
            <?php foreach ($section['Activity'] as $activity): ?>
                <div class="col-md-12 panel panel-heading">
                    <h4 id="activity<?php echo $activity['id']; ?>" class="text-success hashtag-nav">
                        <strong><?php echo $activity['title']; ?></strong>
                    </h4>
                </div>
                <div class="col-md-12 panel panel-body">
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Activity Type:</dt>
                            <dd><?php echo $activity['Type']['type']; ?></dd>
                        </dl>                
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Brief Introduction:</dt>
                            <dd><?php echo $activity['introbrief']; ?></dd>
                        </dl>                
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Detailed Introduction:</dt>
                            <dd><?php echo $activity['introdetailed']; ?></dd>
                        </dl>                
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Activity Goals:</dt>
                            <dd>
                                <ol>
                                    <?php foreach ($activity['Goal'] as $goal): ?>
                                        <li><?php echo $goal['goal']; ?></li><br/>
                                    <?php endforeach; ?>
                                </ol>
                            </dd>
                        </dl>                
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Activity Procedure:</dt>
                            <dd>
                                <ol>
                                    <?php foreach ($activity['Step'] as $step): ?>
                                        <li><?php echo $step['procedureStep']; ?></li><br/>
                                    <?php endforeach; ?>
                                </ol>
                            </dd>
                        </dl>                
                    </div>
                    <div class="panel panel-body">
                        <h4 class="text-success hashtag-nav" id="discussions<?php echo $activity['id'] ?>">Discussions:</h4>
                        <dl class="dl-horizontal">
                            <?php foreach ($activity['Discussion'] as $discussion): ?>
                                <div class="panel panel-default panel-body">
                                    <div class="panel-body">
                                        <dt>Title:</dt>
                                        <dd class="text-info"><strong><?php echo $discussion['title']; ?></strong></dd>
                                    </div>
                                    <div class="panel-body">
                                        <dt>Intro:</dt>
                                        <dd><em><?php echo $discussion['intro']; ?></em></dd>
                                    </div>
                                    <div class="panel-body">
                                        <dt>Prompt:</dt>
                                        <dd><em><?php echo $discussion['prompt']; ?></em></dd>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </dl>
                        </dd>
                        </dl>
                    </div>
                    <div class="panel panel-body">
                        <h4 class="text-success hashtag-nav" id="resources<?php echo $activity['id'] ?>">Resources:</h4>
                        <dl class="dl-horizontal">
                            <?php foreach ($activity['Resource'] as $resource): ?>
                                <div class="panel panel-default panel-body" id="resource<?php echo $resource['id'];?>">
                                    <div class="panel-body">
                                        <dt>Title:</dt>
                                        <dd class="text-info"><strong><?php echo $resource['title']; ?></strong></dd>
                                    </div>
                                    <div class="panel-body">
                                        <dt>Type:</dt>
                                        <dd><?php echo $this->Html->image('icons/icon'.$resource['type_id'].'.png');?></em></dd>
                                    </div>
                                    <div class="panel-body">
                                        <dt>URL:</dt>
                                        <dd><em><a href="<?php echo $resource['path'];?>" target="blank"><?php echo $resource['path'];?></a></em></dd>
                                    </div>
                                    <div class="panel-body">
                                        <dt>Description:</dt>
                                        <dd><em><?php echo $resource['description']; ?></em></dd>
                                    </div>
                                    <div class="panel-body">
                                        <dt>Notes:</dt>
                                        <dd><em><?php echo $resource['note']; ?></em></dd>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </dl>
                        </dd>
                        </dl>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<h3 id="resources<?php echo $section['Section']['id'];?>" class="text-success hashtag-nav">
    <strong>Resources:</strong>
    <span class="badge"><?php echo count($section['Resource']); ?></span>
</h3>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-md-10 panel">
            <?php foreach ($section['Resource'] as $resource): ?>
                <div class="panel panel-body" id="resource<?php echo $resource['id'];?>">
                    <dl class="dl-horizontal">
                        <div class="panel panel-default panel-body">
                            <div class="panel-body">
                                <dt>Title:</dt>
                                <dd class="text-info"><strong><?php echo $resource['title']; ?></strong></dd>
                            </div>
                            <div class="panel-body">
                                <dt>Type:</dt>
                                <dd><?php echo $this->Html->image('icons/icon'.$resource['type_id'].'.png');?></dd>
                            </div>
                            <div class="panel-body">
                                <dt>URL:</dt>
                                <dd><a href="<?php echo $resource['path']; ?>" target="blank"><?php echo $resource['path']; ?></a></em></dd>
                            </div>
                            <div class="panel-body">
                                <dt>Description:</dt>
                                <dd><em><?php echo $resource['description']; ?></em></dd>
                            </div>
                            <div class="panel-body">
                                <dt>Notes:</dt>
                                <dd><em><?php echo $resource['note']; ?></em></dd>
                            </div>
                        </div>
                    </dl>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endforeach;?>
<?php $this->end(); ?>

<?php $this->start('printarea'); ?>
<h3><?php echo($section['Course']['title']); ?></h3>
<?php foreach($sections as $section):?>
<div class="printblock">
    <h2>Session <?php echo($section['Section']['number']); ?>: <?php echo($section['Section']['title']); ?></h2>
</div>
<div class="printblock">
    <p>Scope and Sequence: <em><?php echo $section['Scope']['name']; ?></p>
</div>
<div class="printblock">
    <h4 id="quote" class="text-success hashtag-nav"><strong>Session Quote:</strong></h4>
    <p class="text-center"><?php echo $section['Section']['quote']; ?></p>
    <p class="text-center"><?php echo $section['Section']['speaker']; ?> <?php echo $section['Section']['year']; ?></p>
</div>
<div class="printblock">
    <h4 id="intro" class="text-success hashtag-nav"><strong>Session Introduction:</strong></h4>
    <p><?php echo $section['Section']['intro']; ?></p>
</div>
<div class="printblock">
    <h4 id="overview" class="text-success hashtag-nav"><strong>Session Overview:</strong></h4>
    <?php foreach ($section['Overview'] as $overviewparagraph): ?>
        <p><?php echo $overviewparagraph['paragraph']; ?></p>
    <?php endforeach; ?>
</div>
<div class="printblock">
    <h4 id="essentialquestions" class="text-success hashtag-nav"><strong>Essential Questions:</strong></h4>
    <ol>
        <?php foreach ($section['EssentialQuestion'] as $question): ?>
            <div>
                <li><p><?php echo $question['question']; ?></p></li>
            </div>
        <?php endforeach; ?>
    </ol>
</div>
<div class="printblock activities">
    <h3 id="activities" class="text-success hashtag-nav">
        <strong>Activities:</strong>
        <span class="badge"><?php echo count($section['Activity']); ?></span>
    </h3>
</div>
<?php foreach ($section['Activity'] as $activity): ?>
    <div class="printblock activity">
        <h4 id="activity<?php echo $activity['id']; ?>" class="text-success hashtag-nav">
            <strong><?php echo $activity['title']; ?></strong>
        </h4>
        <dl class="dl-horizontal">
            <dt>Activity Type:</dt>
            <dd><?php echo $activity['Type']['type']; ?></dd>
        </dl>                
        <dl class="dl-horizontal">
            <dt>Brief Introduction:</dt>
            <dd><?php echo $activity['introbrief']; ?></dd>
        </dl>                
        <dl class="dl-horizontal">
            <dt>Detailed Introduction:</dt>
            <dd><?php echo $activity['introdetailed']; ?></dd>
        </dl>                
        <dl class="dl-horizontal">
            <dt>Activity Goals:</dt>
            <dd>
                <ol>
                    <?php foreach ($activity['Goal'] as $goal): ?>
                        <li><?php echo $goal['goal']; ?></li><br/>
                    <?php endforeach; ?>
                </ol>
            </dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Activity Procedure:</dt>
            <dd>
                <ol>
                    <?php foreach ($activity['Step'] as $step): ?>
                        <li><?php echo $step['procedureStep']; ?></li><br/>
                    <?php endforeach; ?>
                </ol>
            </dd>
        </dl>
    </div>
    <div class="printblock">
        <h4 class="text-success hashtag-nav" id="discussions<?php echo $activity['id'] ?>">Discussions:</h4>
        <dl class="dl-horizontal">
            <?php foreach ($activity['Discussion'] as $discussion): ?>
                <div class="printblock">
                    <dt>Title:</dt>
                    <dd class="text-info"><strong><?php echo $discussion['title']; ?></strong></dd>
                    <dt>Intro:</dt>
                    <dd><em><?php echo $discussion['intro']; ?></em></dd>
                    <dt>Prompt:</dt>
                    <dd><em><?php echo $discussion['prompt']; ?></em></dd>
                </div>
            <?php endforeach; ?>
        </dl>
    </div>
<?php endforeach; ?>
    <div class="printblock resources">
        <h4 class="text-success hashtag-nav">Session Resources:</h4>
            <?php foreach ($section['Resource'] as $resource): ?>
        <div class="printblock resource">
                    <dl class="dl-horizontal">
                    <dt>Title:</dt>
                    <dd class="text-info"><strong><?php echo $resource['title']; ?></strong></dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt>Type:</dt>
                    <dd><em><?php echo $this->Html->image('icons/icon'.$resource['type_id'].'.png'); ?></em></dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt>URL:</dt>
                    <dd><em><?php echo $resource['path']; ?></em></dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt>Description:</dt>
                    <dd><em><?php echo $resource['description']; ?></em></dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt>Notes:</dt>
                    <dd><em><?php echo $resource['note']; ?></em></dd>
                    </dl>
                </div>
            <?php endforeach; ?>
    </div>
<?php endforeach;?>
<?php $this->end(); ?>