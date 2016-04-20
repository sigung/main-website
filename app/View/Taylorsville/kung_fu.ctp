<?php
echo $this->Html->css('jquery.bxslider');
echo $this->Html->script('jquery.bxslider/jquery.bxslider.min.js');
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.bxslider').bxSlider({
            auto: true,
            adaptiveHeight: true,
            slideWidth: 600,
            controls: false,
            pause: 6000,
            captions: true
        });
    });
</script>

<div id="visitUs">
    <h3 style="margin:auto; text-align:center;">
        Come Visit Us!
    </h3>
    <div style="margin:auto; text-align:center">
        <span id="address" style="margin-right:30px; font-size:12px; max-width:160px; text-wrap: normal;">
            2312 West 5400 South
        </span>
        <span id="city" style="margin-right:30px; font-size:12px;">
            Taylorsville, UT
        </span>
        <span id="phone" style="font-size:12px;">
            (801) 967-2300
        </span>
    </div>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24215.71835950733!2d-111.96826635420646!3d40.65270643594029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xe431bc8eb6d1514c!2sShaolin+Arts!5e0!3m2!1sen!2sus!4v1449700845140"
            height="300" frameborder="0" style="border:0; width:100%;" allowfullscreen id="mapIframe"></iframe>
    <div style="clear:both"></div>
</div>
