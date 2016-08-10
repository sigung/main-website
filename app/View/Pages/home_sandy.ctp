<?php
echo $this->Html->css('jquery.bxslider');
echo $this->Html->script('jquery.bxslider/jquery.bxslider.min.js');
$imagePrefix = $this->webroot;
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

<div class="homeSlider">
    <ul class="bxslider">
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/clinic.png"
                 title="Training with the Masters"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/groupGirls.png"
                 title="Fun for everyone"
                 height="400" class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/lizFans.png"
                 title="Double fans"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/meditation.png"
                 title="Meditation with nature"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/roundHouse.png"
                 title="Reach your full potential"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/taiChi.png"
                 title="Peace and awareness"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/temple.png"
                 title="International recognition"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/youthKick.png"
                 title="Flying Richard"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/Grapple.png"
                 title="Ground skills"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/youthbow.png"
                 title="Respect"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/AttackS.png"
                 title="Characters here are <u>not</u> actors."
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/BenS.png"
                 title="Weapons, learn to extend your energy"
                 class="sliderPic"/>
        </li>
    </ul>
</div>
<div id="visitUs">
    <h3 style="margin:auto; text-align:center;">
        Come Visit Us!
    </h3>
    <p style="margin:auto; text-align:center;">
        Location: 8536 South 1300 East, Sandy UT
    </p>
    <p style="margin:auto; text-align:center;">
        <a href="tel:801-566-6364">Call</a> (801-566-6364) or send us an <?php echo $this->Html->link('Email', '/contact_us') ?>
    </p>
    <div style="width: 100%; overflow: hidden; height: 350px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48472.47271632151!2d-111.8532324702722!3d40.5961387632723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x875262a882c9b445%3A0xd6ec001b41b3689b!2sShaolin+Arts!5e0!3m2!1sen!2sus!4v1449700511304"
            height="300" frameborder="0" style="border:0; width:100%; margin-top: -150px;" allowfullscreen id="mapIframe_location"></iframe>
    </div>
    <!--<div style="text-align:center; clear:both;"><a href="contact_us" class="btn-alert">Find Your Studio</a></div>-->
    <div style="clear:both"></div>
</div>
