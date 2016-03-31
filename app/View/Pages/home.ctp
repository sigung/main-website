<?php
echo $this->Html->css('jquery.bxslider');
echo $this->Html->script('jquery.bxslider/jquery.bxslider.min.js');
?>

<script type="text/javascript">
    var maps = [
        {location:"Sandy", src:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48472.47271632151!2d-111.8532324702722!3d40.5961387632723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x875262a882c9b445%3A0xd6ec001b41b3689b!2sShaolin+Arts!5e0!3m2!1sen!2sus!4v1449700511304",
        address:"8536 South 1300 East",
        phone:"(801) 566-6364"},
        {location:"Taylorsville", src:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24215.71835950733!2d-111.96826635420646!3d40.65270643594029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xe431bc8eb6d1514c!2sShaolin+Arts!5e0!3m2!1sen!2sus!4v1449700845140",
            address:"2312 West 5400 South",
            phone:"(801) 967-2300"},
        {location:"Glendale", src:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1660.5298474144683!2d-112.1530357612911!3d33.65561509815294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2fc4b6aa559d92ae!2sShaolin+Arts+School+Of+Self+Defense+%26+Fitness!5e0!3m2!1sen!2sus!4v1449700995683",
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
            <img src="/shaolinarts/img/marqueeImages/clinic.png"
                 title="Find your center and find balance..."
                 class="sliderPic"/>
        </li>
        <li>
            <img src="/shaolinarts/img/marqueeImages/groupGirls.png"
                 title="Relax at our out door fitness training!"
                 height="400" class="sliderPic"/>
        </li>
        <li>
            <img src="/shaolinarts/img/marqueeImages/lizFans.png"
                 title="Join our group instruction to find common goals with your peers in the arts!"
                 class="sliderPic"/>
        </li>
        <li>
            <img src="/shaolinarts/img/marqueeImages/meditation.png"
                 title="Help your children discover their abilities and gain confidence."
                 class="sliderPic"/>
        </li>
        <li>
            <img src="/shaolinarts/img/marqueeImages/roundHouse.png"
                 title="Help your children discover their abilities and gain confidence."
                 class="sliderPic"/>
        </li>
        <li>
            <img src="/shaolinarts/img/marqueeImages/taiChi.png"
                 title="Help your children discover their abilities and gain confidence."
                 class="sliderPic"/>
        </li>
        <li>
            <img src="/shaolinarts/img/marqueeImages/temple.png"
                 title="Help your children discover their abilities and gain confidence."
                 class="sliderPic"/>
        </li>
        <li>
            <img src="/shaolinarts/img/marqueeImages/youthKick.png"
                 title="Help your children discover their abilities and gain confidence."
                 class="sliderPic"/>
        </li>
    </ul>
</div>
<div id="visitUs">
    <h3 style="margin:auto; text-align:center;">
        Come Visit Us!
    </h3>
    <div id="locations">
        <div id="SandyLink" class="location-style selected" onclick="toggleMa   p('Sandy')";>
            Sandy, UT</a>
            <div class="address">
                8536 South 1300 East<br>(801) 566-6364
            </div>
        </div>
        <div id="TaylorsvilleLink" class="location-style" onclick="toggleMap('Taylorsville')">
            Taylorsville, UT
            <div class="address">
                2312 West 5400 South<br>(801) 967-2300
            </div>
        </div>
        <div id="GlendaleLink" class="location-style" onclick="toggleMap('Glendale');">
            Glendale, AZ
            <div class="address">
                4330 West Union Hills Drive, Suite B 8<br>(623) 581-2000
            </div>
        </div>
    </div>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48472.47271632151!2d-111.8532324702722!3d40.5961387632723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x875262a882c9b445%3A0xd6ec001b41b3689b!2sShaolin+Arts!5e0!3m2!1sen!2sus!4v1449700511304"
            height="300" frameborder="0" style="border:0; width:100%; margin-top: 5px;" allowfullscreen id="mapIframe"></iframe>
    <!--<div style="text-align:center; clear:both;"><a href="contact_us" class="btn-alert">Find Your Studio</a></div>-->
    <div style="clear:both"></div>
</div>
