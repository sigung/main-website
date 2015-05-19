<div id="tabs-1">
    <?php echo $this->Form->create('User');?>
    <?php echo $this->Form->input('id', array('type'=>'hidden', 'value' => $this->data['User']['id'])); ?>
    <?php echo $this->Form->input('tab', array('type'=>'hidden', 'value' => 'tabs-1')); ?>
    <?php echo $this->Form->input('UserInfo.id', array('type'=>'hidden', 'value' => $this->data['UserInfo']['id'])); ?>
    <?php echo $this->Form->input('UserInfo.user_id', array('type'=>'hidden', 'value' => $this->data['User']['id'])); ?>
    <?php echo $this->Form->submit('Save', array('class' => 'form-submit', 'title' => 'Click here to edit the user')); ?>
    <div style="float:left; width:430px;">
        <ul class="list-group">
            <li class="input-group list-group-item">
                <label class="login_label">First Name*:</label>
                <?php echo $this->Form->input('UserInfo.fname', array('label'=>'', 'maxLength' => 32, 'title' => 'First Name')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Last Name*:</label>
                <?php echo $this->Form->input('UserInfo.lname', array('label'=>'', 'maxLength' => 32, 'title' => 'Last Name')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Due Date:</label>
                <?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->MANAGER)) { ?>
                <?php echo $this->Form->input('due_date', array('dateFormat'=>'DMY', 'minYear'=>date('Y')-110, 'maxYear'=>date('Y')-3+1, 'empty'=>array('- -'), 'maxLength' => 32, 'title' => 'Due Date', 'label'=>'')); ?>
                <?php echo $this->Form->textarea('due_date_comments', array('label'=>'', 'rows'=>3, 'cols'=>45, 'maxLength' => 256, 'title' => 'Due Date Comments')); ?>
                <?php } else { ?>
                <?php echo $this->Form->input('due_date', array('dateFormat'=>'DMY', 'minYear'=>date('Y')-110, 'maxYear'=>date('Y')-3+1, 'empty'=>array('- -'), 'maxLength' => 32, 'title' => 'Due Date', 'label'=>'', 'disabled'=>'disabled')); ?>
                <?php echo $this->Form->textarea('due_date_comments', array('label'=>'', 'rows'=>3, 'cols'=>45, 'maxLength' => 256, 'title' => 'Due Date Comments', 'disabled'=>'disabled')); ?>
                <?php } ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Email*:</label>
                <?php echo $this->Form->input('email', array('label'=>'', 'maxLength' => 100, 'title' => 'Email')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Home Phone:</label>
                <?php echo $this->Form->input('UserInfo.homephone', array('label'=>'', 'maxLength' => 32, 'title' => 'Home Phone')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Cell Phone:</label>
                <?php echo $this->Form->input('UserInfo.cellphone', array('label'=>'', 'maxLength' => 32, 'title' => 'Cell Phone')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Work Phone:</label>
                <?php echo $this->Form->input('UserInfo.workphone', array('label'=>'', 'maxLength' => 32, 'title' => 'Work Phone')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Address:</label>
                <?php echo $this->Form->input('UserInfo.address', array('label'=>'', 'maxLength' => 32, 'title' => 'Address')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">City:</label>
                <?php echo $this->Form->input('UserInfo.city', array('label'=>'', 'maxLength' => 32, 'title' => 'City')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">State:</label>
                <?php echo $this->Form->input('UserInfo.state', array('label'=>'', 'maxLength' => 32, 'title' => 'State')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Zip:</label>
                <?php echo $this->Form->input('UserInfo.zip', array('label'=>'', 'maxLength' => 32, 'title' => 'Zip')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Birth Date:</label>
                <?php echo $this->Form->input('UserInfo.birthdate', array('dateFormat'=>'DMY', 'minYear'=>date('Y')-110, 'maxYear'=>date('Y')-3+1, 'empty'=>array('- -'), 'maxLength' => 32, 'title' => 'Birth Date', 'label'=>'')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Spouse or Guardian:</label>
                <?php echo $this->Form->input('UserInfo.spouseguardian', array('label'=>'', 'maxLength' => 32, 'title' => 'Spouse/Guardian')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">SG Phone:</label>
                <?php echo $this->Form->input('UserInfo.sgphone', array('label'=>'', 'maxLength' => 32, 'title' => 'Spouse or Guardian Home Phone')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">SG Cell Phone:</label>
                <?php echo $this->Form->input('UserInfo.sgcellphone', array('label'=>'', 'maxLength' => 32, 'title' => 'Spouse or Guardian Cell Phone')); ?>
            </li>
        </ul>
        <?php echo $this->Form->submit('Save', array('class' => 'form-submit', 'title' => 'Click here to edit the user')); ?>
    </div>
    <?php echo $this->Form->end(); ?>

    <div  style="margin-left: 20px; float:left; width:400px;">
        <div id="photo">
            <h4>User Photo</h4>
            <?php if ($photoId != null && !empty($photoId)) { ?>
            <iframe id="photoFrame" src='<?php echo $this->Html->url(array("controller" => "photos","action" => "photo", $photoId));?>' style="width:400px; height:400px; border:none; overflow:hidden;" onload="fixPhotoIframe()">
                <?php if (isset($file['Photo'])) { ?>
                <?php
                                print $file['Photo']['data'];
                            ?>
                <?php } ?>
            </iframe>
            <?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->INSMANAGER)) { ?>
            <?php echo $this->Form->postLink(__('Delete Photo'), array('controller'=>'photos', 'action' => 'delete', $photoId), array(), __('Are you sure you want to delete this photo?', $photoId)); ?>
            <?php } ?>
            <?php } else { ?>
            <?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->INSMANAGER)) { ?>
            <?php echo $this->Form->create('Photo', array('type' => 'file', 'url'=>'/photos/add')); ?>
            <?php echo $this->Form->hidden('User.id', array('value'=>$this->data['User']['id'])); ?>
            <ul class="list-group">
                <li class="input-group list-group-item">
                    <label style="display: block; float: left; width: 140px;"></label>
                    <?php echo $this->Form->input('data', array('type'=>'file', 'accept'=>'image/jpeg,image/gif,image/png', 'label'=>'')); ?>
                </li>
            </ul>
            <?php echo $this->Form->end(__('Add')); ?>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>