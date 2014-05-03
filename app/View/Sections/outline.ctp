<?php $this->start('coursetitle'); ?>
<?php echo $this->Html->link($section['Course']['title'], array('controller' => 'courses', 'action' => 'view', $section['Course']['id']), array('class' => 'navbar-brand')); ?>
<?php $this->end(); ?>

<?php $this->start('sessiontopnav');?>

<?php $this->end();?>

<?php $this->start('sidenavigation'); ?>
<div class="col-sm-3 col-md-2 sidebar" id="sidenav">
    <h4><a href="#sessiontitle">Session <?php echo($section['Section']['number']); ?>: <?php echo($section['Section']['title']); ?></a></h4>
    <ul class="list-group">
        <li class="list-group-item"><a href="#quote">Session Quote</a></li>
        <li class="list-group-item"><a href="#intro">Session Intro</a></li>
        <li class="list-group-item"><a href="#overview">Session Overview</a></li>
        <li class="list-group-item"><a href="#essentialquestions">Essential Questions</a></li>
    </ul>
    <h5><a href="#activities">Activities</a>
        <span class="badge pull-right">
            <?php echo count($section['Activity']); ?>
        </span></h5>
    <ul class="list-group">
        <?php foreach ($section['Activity'] as $activity): ?>
            <li class="list-group-item list-group-item-heading">
                <a href="#activity<?php echo $activity['id']; ?>">
                    <?php echo $activity['title']; ?>
                </a>
                <ul>
                    <li><a href="#discussions<?php echo $activity['id']; ?>">Discussions</a></li>
                    <li><a href="#resources<?php echo $activity['id']; ?>">Resources</a></li>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
    <h5><a href="#resources">Resources</a>
        <span class="badge pull-right">
            <?php echo count($section['Resource']); ?>
        </span></h5>
</div>
<?php $this->end(); ?>

<?php $this->start('session'); ?>
<div class="col-md-10">
    <h2 id="sessiontitle" class="text-success text-center hashtag-nav">Session <?php echo($section['Section']['number']); ?>: <?php echo($section['Section']['title']); ?></h2>
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
<h3 id="activities" class="text-success hashtag-nav">
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
                                <div class="panel panel-default panel-body">
                                    <div class="panel-body">
                                        <dt>Title:</dt>
                                        <dd class="text-info"><strong><?php echo $resource['title']; ?></strong></dd>
                                    </div>
                                    <div class="panel-body">
                                        <dt>Type:</dt>
                                        <dd><em><?php echo $type[$resource['type_id']]; ?></em></dd>
                                    </div>
                                    <div class="panel-body">
                                        <dt>URL:</dt>
                                        <dd><em><?php echo $resource['path']; ?></em></dd>
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
<h3 id="resources" class="text-success hashtag-nav">
    <strong>Resources:</strong>
    <span class="badge"><?php echo count($section['Resource']); ?></span>
</h3>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-md-10 panel">
            <?php foreach ($section['Resource'] as $resource): ?>
                <div class="panel panel-body">
                    <dl class="dl-horizontal">
                        <div class="panel panel-default panel-body">
                            <div class="panel-body">
                                <dt>Title:</dt>
                                <dd class="text-info"><strong><?php echo $resource['title']; ?></strong></dd>
                            </div>
                            <div class="panel-body">
                                <dt>Type:</dt>
                                <dd><em><?php echo $type[$resource['type_id']]; ?></em></dd>
                            </div>
                            <div class="panel-body">
                                <dt>URL:</dt>
                                <dd><em><?php echo $resource['path']; ?></em></dd>
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
<?php $this->end(); ?>

<?php $this->start('printarea'); ?>
<div class="printblock">
    <h3><?php echo($section['Course']['title']); ?></h3>
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
                    <dd><em><?php echo $type[$resource['type_id']]; ?></em></dd>
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
<?php $this->end(); ?>