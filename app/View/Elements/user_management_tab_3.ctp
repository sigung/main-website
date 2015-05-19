<?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->INSMANAGER)) { ?>
<div id="tabs-3">
    <div id="comments">
        <h4>Comments:</h4>
        <script type="text/javascript">
            // on dom ready
            $(document).ready(function(){
            // class exists
            if($('.confirm_delete_comment').length) {
                    // add click handler
                $('.confirm_delete_comment').click(function(){
                    // ask for confirmation
                    var result = confirm('Please confirm you wish to DELETE this comment for this user.');

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

        <ul id="notesList" class="list-group" style="width:520px; height:312px; overflow:auto;">
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
        </ul>
        <div id="addNoteSection">
            <h4>Add Comment</h4>
            <ul id="addNote" class="list-group" style="width:500px;">
                <li id="newNote" class="list-group-item" style="width:500px; height:100px;">
                    <?php echo $this->Form->create('Comment', array('url'=>'ajax_add_comment', 'default' => false));
                    echo $this->Form->input('user_id', array('type'=>'hidden', 'value' => $this->data['User']['id']));
                    echo $this->Form->textarea('comment', array('type'=>'text', 'label'=>'', 'style'=>'width:420px;float:left;'));
                    echo $this->Form->submit('add_icon.png', array('style'=>'width:20px; float:right; margin-right:5px;'));
                    echo $this->Form->end();
                    ?>
                <?php
                    // JsHelper should be loaded in $helpers in controller
                    // Form ID: #CommentEditForm
                    $data = $this->Js->get('#CommentEditForm')->serializeForm(array('isForm' => true, 'inline' => true));
                $this->Js->get('#CommentEditForm')->event('submit',
                $this->Js->request(array('action' => 'ajax_add_comment', 'controller' => 'users'),
                array('update' => '#notesList','data'=>$data,'async' => true,'dataExpression'=>true,'method' => 'POST'))
                );
                echo $this->Js->writeBuffer();
                ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php } ?>