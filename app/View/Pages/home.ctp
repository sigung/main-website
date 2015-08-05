<?php
echo $this->Html->css('jquery.bxslider');
echo $this->Html->script('jquery.bxslider/jquery.bxslider.min.js');
?>

<script type="text/javascript">
$(document).ready(function(){
$('.bxslider').bxSlider({
  auto: true,
  adaptiveHeight: true,
  controls:false,
  pause: 6000
});
});
 </script>