<?php
if (empty($archives)) {
  return;
}
?>
<section class="blog" id="archives">
  <header class="blog">
    <h3><?php echo __('Archives'); ?></h3>
  </header>
  <nav>
    <?php echo $this->Blog->nav($archives); ?>
  </nav>
</section>
