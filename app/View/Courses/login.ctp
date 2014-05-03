<div class="courses">
<?php
	foreach ($courses as $course): ?>
        <?php $coursetitle = h($course['Course']['title']);?>
	<?php echo $this->Html->link(__($coursetitle), array('action' => 'edit', $course['Course']['id']));
        echo '<br/>';
        ?>
<?php endforeach; ?>
</div>