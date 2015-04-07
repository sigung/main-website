<div class="manuals form">
<div style="float:right;">
    <?php echo $this->Html->link( "Back to Manuals", array('controller'=>'manuals', 'action'=>'index'),array('escape' => false) ); ?>
</div>
<h3 style="clear:none;margin-top:0px;"><?php echo __('Add Manual'); ?></h3>
<?php echo $this->Form->create('Manual', array('type' => 'file')); ?>
    <ul class="list-group">
        <li class="input-group list-group-item">
            <label style="display: block; float: left; width: 140px;">Name:</label>
            <?php echo $this->Form->input('name', array('label'=>'', 'style'=>'width:300px')); ?>
        </li>
        <li class="input-group list-group-item">
            <label style="display: block; float: left; width: 140px;">Description:</label>
            <?php echo $this->Form->textarea('description', array('label'=>'', 'cols'=>'50', 'rows'=>5)); ?>
        </li>
        <li class="input-group list-group-item">
            <label style="display: block; float: left; width: 140px;">File:</label>
            <?php echo $this->Form->input('data', array('type'=>'file', 'accept'=>'image/jpeg,image/gif,image/png,application/pdf', 'label'=>'')); ?>
        </li>
        <li class="input-group list-group-item" style="height:75px;">
            <label class="login_label">Kung Fu Rank<br>(lowest that can view):</label>
            <?php echo $this->Form->input('kung_fu_rank_id', array('empty'=>'Choose Rank', 'options' => $kungFuRanks, 'label'=>'')); ?>
        </li>
        <li class="input-group list-group-item" style="height:75px;">
            <label class="login_label">TaiChi Rank <br> (lowest that can view):</label>
            <?php echo $this->Form->input('TaiChiRank.id', array('empty'=>'Choose Rank', 'options' => $taiChiRanks, 'label'=>'')); ?>
        </li>
        <li class="input-group list-group-item">
            <label class="login_label">Instructors College:</label>
            <?php echo $this->Form->checkbox('instructors_college', array('hiddenField' => false)); ?>
        </li>
    </ul>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
