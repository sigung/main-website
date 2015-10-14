<?php
if (empty($archives)) {
  return;
}
?>
<div class="blog" id="archives">
  <div class="blog">
    <span><?php echo __('Blog Archive'); ?></span>
  </div>
  <nav>
    <?php echo $this->Blog->nav($archives); ?>
  </nav>
</div>
