<div class="skillType form">
<div style="float:right;">
    <?php echo $this->Html->link( "Back to Skills", array('controller'=>'skills', 'action'=>'index'),array('escape' => false) ); ?>
</div>
<h3 style="clear:none;margin-top:0px;"><?php echo __('Edit Skill Type'); ?></h3>
<?php echo $this->Form->create('SkillType'); ?>
	<fieldset>
        <ul class="list-group">
            <?php echo $this->Session->flash('auth'); ?>
            <?php echo $this->Form->input('id'); ?>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Name:</label>
                <?php echo $this->Form->input('name', array('label'=>'', 'style'=>'width:300px')); ?>
            </li>
        </ul>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>