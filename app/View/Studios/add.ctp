<div class="studios form">
<div style="float:right;">
    <?php echo $this->Html->link( "Back to Studios", array('controller'=>'studios', 'action'=>'index'),array('escape' => false) ); ?>
</div>
<h3 style="clear:none;margin-top:0px;"><?php echo __('Add Studio'); ?></h3>
<?php echo $this->Form->create('Studio'); ?>
	<fieldset>
        <ul class="list-group">
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Name:</label>
                <?php echo $this->Form->input('name', array('label'=>'', 'style'=>'width:300px')); ?>
            </li>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Address:</label>
                <?php echo $this->Form->textarea('address', array('type'=>'text', 'label'=>'', 'style'=>'width:420px;'));?>
            </li>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Phone:</label>
                <?php echo $this->Form->input('phone', array('label'=>'')); ?>
            </li>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Email:</label>
                <?php echo $this->Form->input('email', array('label'=>'')); ?>
            </li>
            <li class="input-group list-group-item">
                <label style="display: block; float: left; width: 140px;">Map File:</label>
                <?php echo $this->Form->input('map_file', array('label'=>'')); ?>
            </li>
        </ul>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
