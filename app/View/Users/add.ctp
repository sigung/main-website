<?php echo $this->Form->create('User');?>
<?php
$usStates = array(
"AL" => "Alabama",
"AK" => "Alaska",
"AZ" => "Arizona",
"AR" => "Arkansas",
"CA" => "California",
"CO" => "Colorado",
"CT" => "Connecticut",
"DE" => "Delaware",
"FL" => "Florida",
"GA" => "Georgia",
"HI" => "Hawaii",
"ID" => "Idaho",
"IL" => "Illinois",
"IN" => "Indiana",
"IA" => "Iowa",
"KS" => "Kansas",
"KY" => "Kentucky",
"LA" => "Louisiana",
"ME" => "Maine",
"MD" => "Maryland",
"MA" => "Massachusetts",
"MI" => "Michigan",
"MN" => "Minnesota",
"MS" => "Mississippi",
"MO" => "Missouri",
"MT" => "Montana",
"NE" => "Nebraska",
"NV" => "Nevada",
"NH" => "New Hampshire",
"NJ" => "New Jersey",
"NM" => "New Mexico",
"NY" => "New York",
"NC" => "North Carolina",
"ND" => "North Dakota",
"OH" => "Ohio",
"OK" => "Oklahoma",
"OR" => "Oregon",
"PA" => "Pennsylvania",
"RI" => "Rhode Island",
"SC" => "South Carolina",
"SD" => "South Dakota",
"TN" => "Tennessee",
"TX" => "Texas",
"UT" => "Utah",
"VT" => "Vermont",
"VA" => "Virginia",
"WA" => "Washington",
"WV" => "West Virginia",
"WI" => "Wisconsin",
"WY" => "Wyoming"
);?>

<fieldset>
    <legend><?php echo __('Registration Form'); ?></legend>
    <?php if (AuthComponent::user()) { ?>
    <legend><?php echo $this->Html->link('Back To Manage Users', '/users/user_management') ?></legend>
    <?php } ?>
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
            <label class="login_label">Email*:</label>
            <?php echo $this->Form->input('email', array('label'=>'', 'maxLength' => 100, 'title' =>'Email')); ?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">Email Confirm*:</label>
            <?php echo $this->Form->input('email_confirm', array('label'=>'', 'maxLength' => 100, 'title' =>'Email Confirmation')); ?>
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
    </ul>

    <ul class="list-group">
        <li class="input-group list-group-item">
            <label class="login_label">City*:</label>
            <?php echo $this->Form->input('UserInfo.city', array('label'=>'', 'maxLength' => 32, 'title' => 'City')); ?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">State*:</label>
            <?php echo $this->Form->input('UserInfo.state', array('empty'=>'Select a State', 'options' => $usStates, 'label'=>'', 'title'=>'State'));?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">Zip*:</label>
            <?php echo $this->Form->input('UserInfo.zip', array('label'=>'', 'maxLength' => 32, 'title' => 'Zip')); ?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">Phone:</label>
            <?php echo $this->Form->input('UserInfo.homephone', array('label'=>'', 'maxLength' => 32, 'title' => 'Phone')); ?>
        </li>
        <?php if (AuthComponent::user()) { ?>
            <?php echo $this->Form->hidden('status_id', array('value'=>3)); ?>
        <?php } else { ?>
            <?php echo $this->Form->hidden('status_id', array('value'=>1)); ?>
        <?php } ?>
    <?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->ADMIN)) {  ?>
        <li class="input-group list-group-item">
            <label class="login_label">Due Date:</label>
            <?php echo $this->Form->input('due_date', array('dateFormat'=>'DMY', 'minYear'=>date('Y')-110, 'maxYear'=>date('Y')-3+1, 'empty'=>array('- -'), 'maxLength' => 32, 'title' => 'Due Date', 'label'=>'')); ?>
            <?php echo $this->Form->input('due_date_comments', array(array('label'=>'', 'maxLength' => 256, 'title' => 'Due Date Comments'))); ?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">Kung Fu Rank:</label>
            <?php echo $this->Form->input('KungFuRank.id', array('options' => $kungFuRanks, 'label'=>'')); ?>
            <?php echo $this->Form->input('kung_fu_rank_date', array('dateFormat'=>'DMY', 'minYear'=>date('Y')-110, 'maxYear'=>date('Y')-3+1, 'empty'=>array('- -'), 'maxLength' => 32, 'title' => 'Kung Fu Rank Date', 'label'=>'')); ?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">TaiChi Rank:</label>
            <?php echo $this->Form->input('TaiChiRank.id', array('options' => $taiChiRanks, 'label'=>'')); ?>
            <?php echo $this->Form->input('tai_chi_rank_date', array('dateFormat'=>'DMY', 'minYear'=>date('Y')-110, 'maxYear'=>date('Y')-3+1, 'empty'=>array('- -'), 'maxLength' => 32, 'title' => 'Tai Chi Rank Date', 'label'=>'')); ?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">Main Website Role:</label>
            <?php echo $this->Form->input('Role.id', array('options' => $roles, 'label'=>'')); ?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">Studio:</label>
            <?php echo $this->Form->input('Studio.id', array('options' => $studios, 'label'=>'')); ?>
        </li>
    <?php }
    echo $this->Form->submit('Register', array('class' => 'form-submit', 'title' => 'Click here to add the user'));
    ?>
    </ul>
</fieldset>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">  $(document).ready(function() {$('#Email').focus();});</script>