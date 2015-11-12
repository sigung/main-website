<div class="row corpus">
    <div class="col-md-9" id="content" style="border-right: #AAA 1px solid;">

      <?php if ($this->Blog->filtered()) : ?>
        <p>Showing posts <?php echo $this->Blog->filterDescription(); ?>, <?php echo $this->Html->link(__('Show all', true), array('action' => 'index')); ?></p>
      <?php endif; ?>

      <?php if (!empty($blogPosts)) : ?>

        <?php foreach ($blogPosts as $blogPost) : ?>

          <article<?php if ($blogPost['BlogPost']['sticky']) {echo ' class="sticky"';} ?> style="margin-left:40px; margin-right:80px;">

        <time pubdate datetime="<?php echo date('c', $createdTimestamp = strtotime($blogPost['BlogPost']['created'])); ?>">
            <?php echo date($blogSettings['published_format_on_post_index'], $createdTimestamp); ?>
        </time>
          <h2><?php echo $this->Html->link($blogPost['BlogPost']['title'], array('action' => 'view', 'slug' => $blogPost['BlogPost']['slug']), array('class'=>'title', 'title' => $blogPost['BlogPost']['title'], 'rel' => 'bookmark')); ?></h2>
              <div class="post">
                <?php echo $blogPost['BlogPost']['body']; ?>
              </div>
                <br><br><br>
          </article>

        <?php endforeach; ?>

        <?php
        $paging = $this->Paginator->params();
        if ($paging['pageCount'] > 1) :
          ?>
          <nav id="paging">
            <?php
            $this->Paginator->options(array('url' => $this->Blog->getPaginatorOptions()));
            echo $this->Paginator->prev('« Newer posts', null, null, array('class' => 'disabled'));
            echo $this->Paginator->next('Older posts »', null, null, array('class' => 'disabled'));
            ?>
          </nav>
        <?php endif; ?>

      <?php else : ?>

        <p><?php echo __('Sorry, there are no blog posts.'); ?></p>

      <?php endif; ?>

    </div>
    <div class="col-md-3 asideColumn hidden-xs hidden-sm">
        <div style="margin-left:20px;">

          <?php echo $this->element('archives'); ?>
          <?php echo $this->element('categories'); ?>
          <?php echo $this->element('tag_cloud'); ?>

        </div>
    </div>
</div>
<?php

// Set the meta title, description and keywords according to the default
// settings or the filtered category or tag.

switch ($this->Blog->filtered()) {
  case 'category':
    $this->set('title_for_layout', $category['BlogPostCategory']['meta_title']);
    $this->set('metaDescription', $category['BlogPostCategory']['meta_description']);
    $this->set('metaKeywords', $category['BlogPostCategory']['meta_keywords']);
    break;
  case 'tag':
    $this->set('title_for_layout', $tag['BlogPostTag']['meta_title']);
    $this->set('metaDescription', $tag['BlogPostTag']['meta_description']);
    $this->set('metaKeywords', $tag['BlogPostTag']['meta_keywords']);
    break;
  default:
    $this->set('title_for_layout', $blogSettings['meta_title']);
    $this->set('metaDescription', $blogSettings['meta_description']);
    $this->set('metaKeywords', $blogSettings['meta_keywords']);
    break;
}
