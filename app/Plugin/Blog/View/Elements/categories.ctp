<?php 
if (empty($categories)) {
  return;
}
?>
<div id="categories">
  <div>
    <span><?php echo __('Categories'); ?></span>
  </div>
  <nav>
    <?php echo $this->Blog->nav($categories); ?>
  </nav>
</div>
