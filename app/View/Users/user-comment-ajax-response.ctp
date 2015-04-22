<script type="text/javascript">
    // on dom ready
    $(document).ready(function(){
    // class exists
    if($('.confirm_delete_comment').length) {
            // add click handler
        $('.confirm_delete_comment').click(function(){
            // ask for confirmation
            var result = confirm('Are you sure you want to delete this?');

            // show loading image
            $('.ajax_loader').show();
            $('#flashMessage').fadeOut();

            // get parent row
            var row = $(this).parents('li');

            // do ajax request
            if(result) {
                $.ajax({
                    type:"POST",
                    url:$(this).attr('href'),
                    data:"ajax=1",
                    dataType: "json",
                    success:function(response){
                        // hide loading image
                        $('.ajax_loader').hide();

                        // hide table row on success
                        if(response.success == true) {
                            row.fadeOut();
                        }

                        // show respsonse message
                        if( response.msg ) {
                            $('#ajax_msg').html( response.msg ).show();
                        } else {
                            $('#ajax_msg').html( "<p id='flashMessage' class='flash_bad'>An unexpected error has occured, please refresh and try again</p>" ).show();
                        }
                    }
                });
            }
        return false;
        });
    }
    });
</script>

<?php foreach ($comments as $j) { ?>
<li class="list-group-item" style="width:500px; height:115px;">
    <div style="float:left; width:400px; height:100px; overflow:auto;">
        <div style="font-size:10px"><?php echo($j['Comment']['date_created']);?></div>
        <?php echo($j['Comment']['comment']);?>
    </div>
    <div style="float:right; margin-right:5px;vertical-align: text-top;">
        <?php echo $this->Html->link($this->Html->image('remove_icon.png', array('style'=>'width:20px; border:none; margin:0px;')),
        array('action'=>'ajax_delete_comment',$j['Comment']['id']),array('escape'=>false, 'class'=>'confirm_delete_comment')) ?>
    </div>
</li>
<?php } ?>