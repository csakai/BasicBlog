<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
<!-- 		<dt><?php echo __('Title'); ?></dt> -->
		<dd>
			<?php echo h($post['Post']['title']); ?>
			<br />
<!-- 		<dt><?php echo __('Created'); ?></dt> -->
			&nbsp;
			<?php echo h($post['Post']['created']); ?>
			<br />
<!-- 		<dt><?php echo __('Body'); ?></dt> -->
			<?php echo h($post['Post']['body']); ?>
			<br />
<!-- 		<dt><?php echo __('Modified'); ?></dt> -->
			<?php if ($post['Post']['modified']!='NULL'){?>
			<?php echo ('Modified on '.$post['Post']['modified'].'<br />');} ?>
<!-- 		<dt><?php echo __('Comment Count'); ?></dt> -->
			<?php echo h($post['Post']['comment_count']); ?>
			<br />
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete "%s"?', $post['Post']['title'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($post['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<!-- <th><?php echo __('Post Id'); ?></th> -->
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['email']; ?></td>
			<td><?php echo $comment['body']; ?></td>
			<!-- <td><?php echo $comment['post_id']; ?></td> -->
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td class="actions">
				<!--<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>-->
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete this comment?')); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add', $post['Post']['id'])); ?> </li>
		</ul>
	</div>
</div>
