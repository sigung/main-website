<div class="skill form">
<div style="float:right;">
    <?php echo $this->Html->link( "Back to Skill", array('controller'=>'skills', 'action'=>'index'),array('escape' => false) ); ?>
</div>
<h3 style="clear:none;margin-top:0px;"><?php echo __('Add Skill'); ?></h3>
<?php echo $this->Form->create('Skill'); ?>
	<fieldset>
        <ul class="list-group">
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Name:</label>
                <?php echo $this->Form->input('name', array('label'=>'', 'style'=>'width:300px')); ?>
            </li>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Description:</label>
                <?php echo $this->Form->textArea('description', array('label'=>'', 'style'=>'width:600px', 'rows'=>'8')); ?>
            </li>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Short Name:</label>
                <?php echo $this->Form->input('name_short', array('label'=>'', 'style'=>'width:200px', 'maxlength'=>'64')); ?>
            </li>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Tiny Name:</label>
                <?php echo $this->Form->input('name_tiny', array('label'=>'', 'style'=>'width:30px', 'maxlength'=>'3')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Skill Type:</label>
                <?php echo $this->Form->input('SkillType.id', array('options' => $skillTypes, 'label'=>'')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">Kung Fu Rank:</label>
                <?php echo $this->Form->input('KungFuRank.id', array('empty'=>'Choose Rank', 'options' => $kungFuRanks, 'label'=>'')); ?>
            </li>
            <li class="input-group list-group-item">
                <label class="login_label">TaiChi Rank:</label>
                <?php echo $this->Form->input('TaiChiRank.id', array('empty'=>'Choose Rank', 'options' => $taiChiRanks, 'label'=>'')); ?>
            </li>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Display Order:</label>
                <?php echo $this->Form->input('display_order', array('label'=>'', 'style'=>'width:60px', 'maxlength'=>'3')); ?>
            </li>
        </ul>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>