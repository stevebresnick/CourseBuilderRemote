<?php $this->start('resources'); ?>
<div class="resources index">
    <table cellpadding="5" cellspacing="20" class="table table-bordered">
        <tr>
            <th><?php echo $this->Paginator->sort('type_id', 'Type'); ?></th>
            <th><?php echo $this->Paginator->sort('title'); ?></th>
            <th>Found In:</th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($resources as $resource): ?>
            <tr style="height: 150px;">
                <td>
                    <?php echo $this->Html->image('icons/icon' . $resource['Type']['id'] . '.png'); ?>
                </td>
                <td>
                    <table width="200px" class="table">
                        <tbody>
                            <tr>
                                <td><?php echo $this->Html->link($resource['Resource']['title'], array('action'=>'view', $resource['Resource']['id'])); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $this->Html->link('Link to Resource', $resource['Resource']['path'], array('target'=>'blank', 'style'=>'color:purple;')); ?></td>
                            </tr>
                                                        <tr>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info resourcedescription" data-container="body" data-toggle="popover" data-content="<?php echo h($resource['Resource']['description']); ?>">
                                        View Description
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <?php if(!empty($resource['Course'])){
                                        foreach ($resource['Course'] as $courseresource){
                                            echo $this->Html->link($courseresource['title'], array('controller'=>'courses','action'=>'view', $courseresource['id']));
                                        }
                                    } elseif(!empty($resource['Section'])){
                                        foreach ($resource['Section'] as $section){
                                            echo $this->Html->link($section['Course']['title'], array('controller'=>'courses', 'action'=>'view', $section['Course']['id'])).'<br/>';
                                            echo $this->Html->link('Session: '. $section['number'], array('controller'=>'sections', 'action'=>'view', $section['id']));
                                        }
                                    } elseif (!empty($resource['Activity'])){
                                        foreach ($resource['Activity'] as $activity){
                                            echo $this->Html->link($course[$activity['Section']['course_id']], array('controller'=>'courses', 'action'=>'view', $activity['Section']['course_id'])).'<br/>';
                                            echo $this->Html->link('Session '. $activity['Section']['number'], array('controller'=>'sections', 'action'=>'view', $activity['Section']['id'])).'<br/>';
                                            echo $this->Html->link('Activity: '. $activity['id'], array('controller'=>'activities', 'action'=>'view', $activity['id'])).'<br/>';
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
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $resource['Resource']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resource['Resource']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resource['Resource']['id']), null, __('Are you sure you want to delete # %s?', $resource['Resource']['id'])); ?>
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
