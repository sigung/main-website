<?php
$imagePrefix = $this->webroot;
?>

<div class="homeSlider">
    <img src="<?php echo $imagePrefix ?>img/Peoria Studio.JPG"
         title="Peoria Studio Store Front" style="width:95%;"/>
</div>
<div id="visitUs">
    <h3 style="margin:auto; text-align:center;">
        Peoria Studio <?php echo $this->Html->link('Contact Us!', '/contact_us', array('class'=>'contact-us-link')) ?>
    </h3>
    <p style="margin:auto; text-align:center;">
        Location: 8271 W. Lake Pleasant Pkwy, Suite 101, Peoria, AZ
    </p>
    <p style="margin:auto; text-align:center;">
        <a href="tel:623-581-2000">Call</a> (623-581-2000) or send us an <?php echo $this->Html->link('Email', '/contact_us') ?>
    </p>
    <div style="width: 100%; overflow: hidden; height: 350px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1660.5298474144683!2d-112.1530357612911!3d33.65561509815294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2fc4b6aa559d92ae!2sShaolin+Arts+School+Of+Self+Defense+%26+Fitness!5e0!3m2!1sen!2sus!4v1449700995683"
            height="300" frameborder="0" style="border:0; width:100%; margin-top: -150px;" allowfullscreen id="mapIframe_location"></iframe>
    </div>
    <!--<div style="text-align:center; clear:both;"><a href="contact_us" class="btn-alert">Find Your Studio</a></div>-->
    <div style="clear:both"></div>
</div>
