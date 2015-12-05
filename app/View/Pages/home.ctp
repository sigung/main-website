<?php
echo $this->Html->css('jquery.bxslider');
echo $this->Html->script('jquery.bxslider/jquery.bxslider.min.js');
?>

<script type="text/javascript">
    var maps = [
        {location:"Sandy", src:"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d96944.93762503672!2d-111.92461422881314!3d40.596144147720786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x875262a882c9b445%3A0xd6ec001b41b3689b!2s8536+1300+E%2C+Sandy%2C+UT+84094!3m2!1d40.596165299999996!2d-111.8545743!5e0!3m2!1sen!2sus!4v1449248570838",
        address:"8536 South 1300 East",
        city:"Sandy, Utah 84094",
        phone:"(801) 566-6364"},
        {location:"Taylorsville", src:"2",
            address:"2312 West 5400 South",
            city:"Taylorsville, Utah 84129",
            phone:"(801) 967-2300"},
        {location:"Glendale", src:"3",
            address:"4330 West Union Hills Drive, Suite B 8",
            city:"Glendale, AZ 85308",
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
        $('#mapIframe').attr('src',map['location']);
        $('#address').html(map['address']);
        $('#city').html(map['city']);
        $('#phone').html(map['phone']);
        $('.btn-alert').each(function() {
            console.log(this);
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
        <li><img src="/shaolinarts/img/bowPodao.gif" title="Find your center and find balance..." class="sliderPic"/></li>
        <li><img src="/shaolinarts/img/AZclimbingCrack.gif" title="Relax at our out door fitness training!"
                 height="400" class="sliderPic"/></li>
        <li><img src="/shaolinarts/img/AZclass-group.gif"
                 title="Join our group instruction to find common goals with your peers in the arts!" class="sliderPic"/>
        </li>
        <li><img src="/shaolinarts/img/youthGroup.jpg"
                 title="Help your children discover their abilities and gain confidence." class="sliderPic"/></li>
    </ul>
</div>
<div id="visitUs">
    <h3 style="margin:auto; text-align:center;">
        Come Visit Us!
    </h3>
    <div style="text-align:center; clear:both;">
        <a href="#" class="btn-alert selected" id="SandyLink" onclick="toggleMap('Sandy')">Sandy, UT</a>
        <a href="#" class="btn-alert" id="TaylorsvilleLink" onclick="toggleMap('Taylorsville')">Taylorsville, UT</a>
        <a href="#" class="btn-alert" id="GlendaleLink" onclick="toggleMap('Glendale')">Glendale, AZ</a>
    </div>
    <div style="margin:auto; text-align:center">
        <span id="address" style="margin-right:30px; font-size:12px; max-width:160px; text-wrap: normal;">
            8536 South 1300 East
        </span>
        <span id="city" style="margin-right:30px; font-size:12px;">
            Sandy, UT
        </span>
        <span id="phone" style="font-size:12px;">
            (801) 566-6364
        </span>
    </div>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d96944.93762503672!2d-111.92461422881314!3d40.596144147720786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x875262a882c9b445%3A0xd6ec001b41b3689b!2s8536+1300+E%2C+Sandy%2C+UT+84094!3m2!1d40.596165299999996!2d-111.8545743!5e0!3m2!1sen!2sus!4v1449248570838"
            height="300" frameborder="0" style="border:0; width:100%;" allowfullscreen id="mapIframe"></iframe>
    <!--<div style="text-align:center; clear:both;"><a href="contact_us" class="btn-alert">Find Your Studio</a></div>-->
    <div style="clear:both"></div>
</div>
