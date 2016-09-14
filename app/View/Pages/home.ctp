<?php
echo $this->Html->css('jquery.bxslider');
echo $this->Html->script('jquery.bxslider/jquery.bxslider.min.js');
$imagePrefix = $this->webroot;
?>

<script type="text/javascript">
    var maps = [
        {location:"Sandy", src:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48472.47271632151!2d-111.8532324702722!3d40.5961387632723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x875262a882c9b445%3A0xd6ec001b41b3689b!2sShaolin+Arts!5e0!3m2!1sen!2sus!4v1449700511304",
        address:"8536 South 1300 East",
        phone:"(801) 566-6364"},
        {location:"Taylorsville", src:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24215.71835950733!2d-111.96826635420646!3d40.65270643594029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xe431bc8eb6d1514c!2sShaolin+Arts!5e0!3m2!1sen!2sus!4v1449700845140",
            address:"2312 West 5400 South",
            phone:"(801) 967-2300"},
        {location:"Peoria", src:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1660.5298474144683!2d-112.1530357612911!3d33.65561509815294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2fc4b6aa559d92ae!2sShaolin+Arts+School+Of+Self+Defense+%26+Fitness!5e0!3m2!1sen!2sus!4v1449700995683",
            address:"4330 West Union Hills Drive, Suite B 8",
            phone:"(623) 581-2000"}
    ]

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

    function toggleMap(location) {
        var map = getMap(location);
        $('#mapIframe').attr('src',map['src']);
        $('.location-style').each(function() {
            $(this).removeClass('selected');
        })
        $('#'+location+'Link').addClass('selected');
    }

    function getMap(location) {
        for(var i = 0; i < maps.length; i++)
        {
            if (maps[i]['location'] == location) {
                return maps[i];
            }
        }

    }
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
                 title="Grapple"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/youthbow.png"
                 title="Respect"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/AttackS.png"
                 title="Learn to defend yourself!  (Characters in this photo are actors)"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="<?php echo $imagePrefix ?>img/marqueeImages/BenS.png"
                 title="Do you know what a kali stick is?  How to use one?"
                 class="sliderPic"/>
        </li>
    </ul>
</div>
<div id="visitUs">
    <h3 style="margin:auto; text-align:center;">
        Shaolin Arts <?php echo $this->Html->link('Come Visit Us!', '/contact_us', array('class'=>'contact-us-link')) ?>

    </h3>
    <div id="locations">
        <div id="SandyLink" class="location-style selected" onclick="toggleMap('Sandy')";>
            Sandy, UT</a>
            <div class="address">
                8536 South 1300 East<br>(801) 566-6364
            </div>
            <?php echo $this->Html->link('More Info', '/home_sandy', array('class'=>'location-link')) ?>
        </div>
        <div id="TaylorsvilleLink" class="location-style" onclick="toggleMap('Taylorsville')">
            Taylorsville, UT
            <div class="address">
                2312 West 5400 South<br>(801) 967-2300
            </div>
            <?php echo $this->Html->link('More Info', '/home_taylorsville', array('class'=>'location-link')) ?>
        </div>
        <div id="PeoriaLink" class="location-style" onclick="toggleMap('Peoria');">
            Peoria, AZ
            <div class="address">
                8271 W Lake Pleasant Pkwy
                <br>(623) 581-2000
            </div>
            <?php echo $this->Html->link('More Info', '/home_peoria', array('class'=>'location-link')) ?>
        </div>
    </div>
    <br>

<div style="width: 100%; overflow: hidden; height: 300px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48472.47271632151!2d-111.8532324702722!3d40.5961387632723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x875262a882c9b445%3A0xd6ec001b41b3689b!2sShaolin+Arts!5e0!3m2!1sen!2sus!4v1449700511304"
            height="300" frameborder="0" style="border:0; width:100%; margin-top: -150px;" allowfullscreen id="mapIframe"></iframe>
    </div>
    <!--<div style="text-align:center; clear:both;"><a href="contact_us" class="btn-alert">Find Your Studio</a></div>-->
    <div style="clear:both"></div>
</div>
