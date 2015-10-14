<div class="blogPosts index">
	<h2><?php echo __('Blog Posts');?></h2>
    <table id="pattern-style-b" style="margin:0px;">
        <thead>
            <tr>
                    <th style=border-bottom:none;"><?php echo $this->Paginator->sort('title');?></th>
                    <th style="white-space: nowrap; border-bottom:none;"><?php echo $this->Paginator->sort('slug');?></th>
                    <th style=border-bottom:none;"><?php echo $this->Paginator->sort('published');?></th>
                    <th style="white-space: nowrap; border-bottom:none;"><?php echo $this->Paginator->sort('created');?></th>
                    <th style=border-bottom:none;"><?php echo $this->Paginator->sort('modified');?></th>
                    <th class="actions" style="white-space: nowrap; text-align:right;border-bottom:none;"><?php echo __('Actions');?></th>
            </tr>
        </thead>
	<?php
	$i = 0;
	foreach ($blogPosts as $blogPost):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td style="white-space: nowrap; text-align:right;"><?php echo h($blogPost['BlogPost']['title']); ?>&nbsp;</td>
		<td style="white-space: nowrap; text-align:right;"><?php echo h($blogPost['BlogPost']['slug']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['published']); ?>&nbsp;</td>
		<td style="white-space: nowrap; text-align:right;"><?php echo $this->Time->nice(h($blogPost['BlogPost']['created'])); ?>&nbsp;</td>
		<td style="white-space: nowrap; text-align:right;"><?php echo $this->Time->nice(h($blogPost['BlogPost']['modified'])); ?>&nbsp;</td>
		<td style="white-space: nowrap; text-align:right;" class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogPost['BlogPost']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogPost['BlogPost']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogPost['BlogPost']['id']), null, __('Are you sure you want to delete # %s?', $blogPost['BlogPost']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Blog Post Categories'), array('controller' => 'blog_post_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post Category'), array('controller' => 'blog_post_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Post Tags'), array('controller' => 'blog_post_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post Tag'), array('controller' => 'blog_post_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
