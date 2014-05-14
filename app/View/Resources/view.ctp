<?php if(!empty($resource['Activity'])){

$this->start('sessiontitle');
echo $this->Html->link('Session '.$resource['Activity'][0]['Section']['number'].': '.$resource['Activity'][0]['Section']['title'], array('controller' => 'sections', 'action' => 'view', $resource['Activity'][0]['Section']['id']));
$this->end();

$this->start('activitytitle');
echo $this->Html->link($resource['Activity'][0]['Type']['type'].' Activity: '.$resource['Activity'][0]['title'], array('controller' => 'activities', 'action' => 'view', $resource['Activity'][0]['id']), array('class'=>'text-info'));
$this->end();

$this->start('navigation');
echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $resource['Activity'][0]['Section']['course_id']), array('class' => 'btn btn-md btn-success btn-block')));
echo $this->Html->div('col-md-12', $this->Html->link('Back to Session'.$resource['Activity'][0]['Section']['number'], array('controller' => 'sections', 'action' => 'view', $resource['Activity'][0]['Section']['id']), array('class' => 'btn btn-md btn-warning btn-block'))); 
echo $this->Html->div('col-md-12', $this->Html->link('Back to Activity', array('controller' => 'activities', 'action' => 'view', $resource['Activity'][0]['id']), array('class' => 'btn btn-md btn-info btn-block')));
$this->end();

} else {

$this->start('sessiontitle');
echo $this->Html->link('Session '.$resource['Section'][0]['number'].': '.$resource['Section'][0]['title'], array('controller' => 'sections', 'action' => 'view', $resource['Section'][0]['id']));
$this->end();

$this->start('navigation');
echo $this->Html->div('col-md-12', $this->Html->link('Back to Course', array('controller' => 'courses', 'action' => 'view', $resource['Section'][0]['Course']['id']), array('class' => 'btn btn-md btn-success btn-block')));
echo $this->Html->div('col-md-12', $this->Html->link('Back to Session'.$resource['Section'][0]['number'], array('controller' => 'sections', 'action' => 'view', $resource['Section'][0]['id']), array('class' => 'btn btn-md btn-warning btn-block'))); 
$this->end();

};?>

<?php $this->start('resources');?>
<div class="panel panel-success">
    <div class="panel-body">
        <div class="col-md-12">
        <div class="col-md-3">
            <div class="col-md-12">
                <div class="col-md-2"></div>
            <?php echo $this->Html->image('icons/icon'.$resource['Resource']['type_id'].'.png', array('class'=>'img-rounded col-md-8'));?>
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-12">
                <p class="text-info text-center"><?php echo $resource['Type']['type'];?> Resource</p>  
            </div>
            </div>
            <div class="col-md-7">
            <h2 class="text-danger"><?php echo $resource['Resource']['title'];?></h2>
            <h4><?php echo $this->Html->link($resource['Resource']['path'], $resource['Resource']['path'], array('target'=>'blank'));?></h4>
            </div>
            <?php if($mode == 1):?>
            <div class="col-md-2">
                <?php if(!empty($resource['Activity'])){
                echo $this->Html->link(__('Edit Resource'), array('action'=>'edit', $resource['Resource']['id'], $resource['Activity'][0]['section_id'], $resource['Activity'][0]['id']), array('class'=>'btn btn-warning btn-sm btn-block'));
                } else {
                echo $this->Html->link(__('Edit Resource'), array('action'=>'edit', $resource['Resource']['id'], $resource['Section'][0]['id']), array('class'=>'btn btn-warning btn-sm btn-block'));    
                };
                ?>
                </div>
                <?php endif;?> 
        </div>
        <div class="col-md-7">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Description:</h3>
                </div>
                <div class="panel-body" style="height:250px; overflow-y: hidden; overflow: scroll;">
                    <?php echo $resource['Resource']['description'];?>
                    <?php if(isset($resource['Resource']['brightcove'])){
                        echo '<strong>Brightcove ID:</strong> <em>'.$resource['Resource']['brightcove'].'</em>';};?>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Notes:</h3>
                </div>
                <div class="panel-body" style="height:250px; overflow-y: hidden; overflow: scroll;">
                    <?php echo $resource['Resource']['note'];?>
                </div>
            </div>
        </div>
        <?php if($resource['Resource']['html']!==NULL):?>
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?php $sourcecode = $resource['Resource']['html'];?>
                    <h3 class="panel-title">HTML Preview: <button id="htmlsourcecode" class="btn btn-xs btn-default pull-right">Toggle HTML Code</button></h3>
                </div>
                <div class="panel-body" style="height:250px; overflow-y: hidden; overflow: scroll;">
                    <div id="htmlsource"><?php echo $resource['Resource']['html'];?></div>
                    <div id="htmlsource"><?php echo h(($resource['Resource']['html'])); ?></div>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>
<?php $this->end();?>
        </div>
    </div>
<div class="panel panel-"
<h2><?php  echo __('Resource');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resource['Type']['type'], array('controller' => 'types', 'action' => 'view', $resource['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Resource'), array('action' => 'edit', $resource['Resource']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resource'), array('action' => 'delete', $resource['Resource']['id']), null, __('Are you sure you want to delete # %s?', $resource['Resource']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resources'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Activities');?></h3>
	<?php if (!empty($resource['Activity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Required'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Introbrief'); ?></th>
		<th><?php echo __('Introdetailed'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($resource['Activity'] as $activity): ?>
		<tr>
			<td><?php echo $activity['id'];?></td>
			<td><?php echo $activity['section_id'];?></td>
			<td><?php echo $activity['required'];?></td>
			<td><?php echo $activity['title'];?></td>
			<td><?php echo $activity['introbrief'];?></td>
			<td><?php echo $activity['introdetailed'];?></td>
			<td><?php echo $activity['type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'view', $activity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'activities', 'action' => 'edit', $activity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'activities', 'action' => 'delete', $activity['id']), null, __('Are you sure you want to delete # %s?', $activity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sections');?></h3>
	<?php if (!empty($resource['Section'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Scope Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Intro'); ?></th>
		<th><?php echo __('Quote'); ?></th>
		<th><?php echo __('Speaker'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Video'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($resource['Section'] as $section): ?>
		<tr>
			<td><?php echo $section['id'];?></td>
			<td><?php echo $section['number'];?></td>
			<td><?php echo $section['course_id'];?></td>
			<td><?php echo $section['scope_id'];?></td>
			<td><?php echo $section['title'];?></td>
			<td><?php echo $section['intro'];?></td>
			<td><?php echo $section['quote'];?></td>
			<td><?php echo $section['speaker'];?></td>
			<td><?php echo $section['year'];?></td>
			<td><?php echo $section['video'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $section['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete', $section['id']), null, __('Are you sure you want to delete # %s?', $section['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
