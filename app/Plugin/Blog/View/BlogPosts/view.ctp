<div class="row corpus">
    <div class="col-md-9" id="content" style="border-right: #AAA 1px solid;">

      <article>

          <time pubdate datetime="<?php echo date('c', $createdTimestamp = strtotime($blogPost['BlogPost']['created'])); ?>">
              <?php echo date($blogSettings['published_format_on_post_index'], $createdTimestamp); ?>
          </time>
          <h2><?php echo $this->Html->link($blogPost['BlogPost']['title'], array('action' => 'view', 'slug' => $blogPost['BlogPost']['slug']), array('class'=>'title', 'title' => $blogPost['BlogPost']['title'], 'rel' => 'bookmark')); ?></h2>


          <?php if (strtolower($blogSettings['show_summary_on_post_view']) == 'yes') : ?>
          <p class="summary">
            <?php echo $blogPost['BlogPost']['summary']; ?>
          </p>
        <?php endif; ?>

        <div class="body">
          <?php echo $blogPost['BlogPost']['body']; ?>
        </div>

        <footer>

          <?php if (strtolower($blogSettings['show_categories_on_post_view']) == 'yes' && !empty($blogPost['BlogPostCategory'])) : ?>
            <nav id="categories">
              <p><?php echo __('Posted in '); ?></p>
              <?php echo $this->Blog->nav($blogPost['BlogPostCategory'], array('url' => array('action' => 'index'))); ?>
            </nav>
          <?php endif; ?>

          <?php if (strtolower($blogSettings['show_tags_on_post_view']) == 'yes' && !empty($blogPost['BlogPostTag'])) : ?>
            <nav id="tags">
              <p><?php echo __('Tagged with '); ?></p>
              <?php echo $this->Blog->nav($blogPost['BlogPostTag'], array('url' => array('action' => 'index'))); ?>
            </nav>
          <?php endif; ?>

          <?php if (strtolower($blogSettings['show_share_links']) == 'yes') { ?>
            <?php echo $this->element('share'); ?>
          <?php } ?>

        </footer>

      </article>
    </div>
    <div class="col-md-3 asideColumn hidden-xs hidden-sm">
        <div id="sidebar" style="margin-left:20px;">
          <?php echo $this->element('archives'); ?>
          <?php echo $this->element('categories'); ?>
          <?php echo $this->element('tag_cloud'); ?>
        </div>
    </div>
</div>
<?php
$this->set('title_for_layout', $blogPost['BlogPost']['meta_title']);
$this->set('metaDescription', $blogPost['BlogPost']['meta_description']);
$this->set('metaKeywords', $blogPost['BlogPost']['meta_keywords']);
$this->set('metaOgTitle', $blogPost['BlogPost']['title']);
$this->set('metaOgType', 'article');
$this->set('metaOgUrl', $this->Blog->permalink($blogPost));
//$this->set('metaOgImage');
$this->set('metaOgSiteName', $blogSettings['og:site_name']);
$this->set('metaFbAdmins', $blogSettings['fb_admins']);
