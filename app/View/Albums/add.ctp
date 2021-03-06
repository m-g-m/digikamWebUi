<div class="albums form">
<?php echo $this->Form->create('Album'); ?>
	<fieldset>
		<legend><?php echo __('Add Album'); ?></legend>
	<?php
		echo $this->Form->input('albumRoot');
		echo $this->Form->input('relativePath', array('type'=>'text', 'value'=>'/'));
		echo $this->Form->input('date');
		echo $this->Form->input('caption', array('type'=>'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Albums'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Album Roots'), array('controller' => 'album_roots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album Root'), array('controller' => 'album_roots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
