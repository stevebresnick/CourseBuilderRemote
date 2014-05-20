<?php $this->start('resources');?>
<div class="panel panel-default">
    <div class="panel-body">
<div class="col-md-12 form-group">
<?php echo $this->Form->create('Brighcove', array('role' => 'form')); ?>
<fieldset>
    <?php echo $this->Html->div('col-md-5',$this->Form->input('search_query', array('label' => 'Enter Brightcove Search Terms:', 'class' => 'form-control')));?>
</fieldset>
<?php echo $this->Form->end(array('label' => 'Search', 'class' => 'form-control btn btn-xs btn-info')); ?>
</div>

<?php foreach($bcarray as $video):?>
<div class="col-md-12 panel panel-info panel-body">
    <div class="col-md-2">
        <?php echo $this->Html->image($video['videoStillURL'], array('width' => '150', 'height' => '150'));?>
    </div>
    <div class="col-md-10">
        <div class="col-md-12">
            <h3 class="text-info"><?php echo $video['name'];?></h3>
        </div>
        <div class="col-md-12">
            <div class="col-md-10">
             <p><?php echo $video['longDescription'];?></p>
            </div>
            <div class="col-md-2">
                <?php echo $this->Html->link('Make Session Video');?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<pre>
<?php print_r($bcarray);?>
</pre>
    </div>
</div>
<?php $this->end();?>

<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('User Dashboard'), array('controller' => 'users', 'action' => 'dashboard')); ?> </li>
	</ul>
</div>
