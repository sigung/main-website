<?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->ADMIN)) { ?>
<div id="tabs-3">
    <div id="comments">
        <h4>Comments:</h4>
        <ul id="notesList" class="list-group" style="width:520px; height:312px; overflow:auto;">
            <li class="list-group-item" style="width:500px; height:115px;">
                <div style="float:left; width:400px; height:100px; overflow:auto;">
                    <div style="font-size:10px">20 Jan 2015</div>
                    This is a very good note!  HA!  This student has worked so hard on this very fine time.  Some other text is also here to fill in the space.
                </div>
                <div style="float:right; margin-right:5px;vertical-align: text-top;">
                    <?php echo $this->Html->link($this->Html->image('remove_icon.png', array('style'=>'width:20px; border:none; margin:0px;')),
                    array('action'=>'',''),array('escape'=>false, 'class'=>'confirm_delete')) ?>
                </div>
            </li>
            <li class="list-group-item" style="width:500px; height:115px;">
                <div style="float:left; width:400px; height:100px; overflow:auto;">
                    <div style="font-size:10px">12 Jan 2015</div>
                    This is a second note.  But not one of much importance.
                </div>
                <div style="float:right; margin-right:5px;vertical-align: text-top;">
                    <?php echo $this->Html->link($this->Html->image('remove_icon.png', array('style'=>'width:20px; border:none; margin:0px;')),
                    array('action'=>'',''),array('escape'=>false, 'class'=>'confirm_delete')) ?>
                </div>
            </li>
            <li class="list-group-item" style="width:500px; height:115px;">
                <div style="float:left; width:400px; height:100px; overflow:auto;">
                    <div style="font-size:10px">11 Jan 2015</div>
                    This is a second note.  But not one of much importance.
                </div>
                <div style="float:right; margin-right:5px;vertical-align: text-top;">
                    <?php echo $this->Html->link($this->Html->image('remove_icon.png', array('style'=>'width:20px; border:none; margin:0px;')),
                    array('action'=>'',''),array('escape'=>false, 'class'=>'confirm_delete')) ?>
                </div>
            </li>
            <li class="list-group-item" style="width:500px; height:115px;">
                <div style="float:left; width:400px; height:100px; overflow:auto;">
                    <div style="font-size:10px">4 Dec 2014</div>
                    This is a second note.  But not one of much importance.
                </div>
                <div style="float:right; margin-right:5px;vertical-align: text-top;">
                    <?php echo $this->Html->link($this->Html->image('remove_icon.png', array('style'=>'width:20px; border:none; margin:0px;')),
                    array('action'=>'',''),array('escape'=>false, 'class'=>'confirm_delete')) ?>
                </div>
            </li>
            <li class="list-group-item" style="width:500px; height:115px;">
                <div style="float:left; width:400px; height:100px; overflow:auto;">
                    <div style="font-size:10px">4 Dec 2014</div>
                    This is a second note.  But not one of much importance.
                </div>
                <div style="float:right; margin-right:5px;vertical-align: text-top;">
                    <?php echo $this->Html->link($this->Html->image('remove_icon.png', array('style'=>'width:20px; border:none; margin:0px;')),
                    array('action'=>'',''),array('escape'=>false, 'class'=>'confirm_delete')) ?>
                </div>
            </li>
        </ul>
        <div id="addNoteSection">
            <h4>Add Comment</h4>
            <ul id="addComment" class="list-group" style="width:500px;">
                <li id="newComment" class="list-group-item" style="width:500px; height:100px;">
                    <?php echo $this->Form->create('Comment', array('url'=>'ajax_add_role', 'default' => false));
                    echo $this->Form->input('User.id', array('type'=>'hidden', 'value' => $this->data['User']['id']));
                    echo $this->Form->textarea('Comment', array('type'=>'text', 'label'=>'', 'style'=>'width:420px;float:left;'));
                    echo $this->Form->submit('add_icon.png', array('style'=>'width:20px; float:right; margin-right:5px;'));
                    echo $this->Form->end();
                    ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php } ?>