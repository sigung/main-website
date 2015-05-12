<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('id', array('type'=>'hidden', 'value' => $id)); ?>
<h3>Change Password</h3>
<div style="float:right;">
    <?php echo $this->Html->link( "Back Home", array('controller'=>'users', 'action'=>'user_home'),array('escape' => false) ); ?>
</div>
<br/>
<ul class="list-group">
    <li class="input-group list-group-item">
        <label class="login_label">Old Password*:</label>
        <?php echo $this->Form->input('old_password', array('label'=>'', 'type'=>'password')); ?>
    </li>
    <li class="input-group list-group-item">
        <label class="login_label">Password*:</label>
        <?php echo $this->Form->input('password', array('label'=>'')); ?>
    </li>
    <li class="input-group list-group-item">
        <label class="login_label">Confirm Password*:</label>
        <?php echo $this->Form->input('password_confirm', array('label' => '', 'maxLength' => 255,
        'title' => 'Confirm password', 'type'=>'password')); ?>
    </li>
    <li class="input-group list-group-item">
        <?php echo $this->Form->submit('Reset Password', array('div' => false,'class' => 'urclass', 'title' => 'Reset Password')); ?>
    </li>
</ul>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">  $(document).ready(function() {    $('#UserOldPassword').focus();  });</script>