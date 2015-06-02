<script type="text/javascript">
    var skills = [];

    // on dom ready
    $(document).ready(function(){
        $.ajax({
            type:"POST",
            url:'ajax_get_skills',
            data:"ajax=1",
            dataType: "json",
            success:function(response){
                response.skillsForStudent.forEach(function(entry) {
                    skills.push(entry.Skill.name_tiny);
                });
                setInterval(function(){ showNumber() }, 3000);
            }
        });
    });

    function showNumber() {
        var rand = skills[Math.floor(Math.random() * skills.length)];
        $("#comboSound").attr("src", "<?php echo Router::url('/') ?>audio/Combo"+rand+".mp3");
        $('#comboNumber').html(rand);
        document.getElementById('comboSound').play();
    }
</script>
<audio id="comboSound" src="<?php echo Router::url('/') ?>audio/Combo1.mp3" preload="auto"></audio>
<div id="comboNumber" style="font-size:300px;">

</div>