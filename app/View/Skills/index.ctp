<div style="float:right;">
    <?php echo $this->Html->link("Back to Admin", array('controller'=>'administrative_pages', 'action'=>'home'),array('escape' => false) ); ?>
</div>
<br>
<br>

<div class="skills index" style="float:left; margin-right:80px;">
    <h3 style="clear:none;margin-top:0px;"><?php echo __('Skills'); ?></h3>
    <?php echo $this->Html->link("Add A Skill", array('action'=>'add'),array('escape' => false) ); ?>
	<table cellpadding="0" cellspacing="0" id="pattern-style-b">
	<tr>
        <th>Name</th>
        <th>Type</th>
        <th>KF</th>
        <th>TC</th>
        <th>Order</th>
        <th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($skills as $skill): ?>
	<tr>
		<td><div style="width:120px;"><?php echo h($skill['Skill']['name_short']); ?>&nbsp;</div></td>
        <td><div style="width:90px;"><?php echo h($skill['SkillType']['name']); ?>&nbsp;</div></td>
        <td><div style="width:50px;"><?php echo h($skill['KungFuRank']['name']); ?>&nbsp;</div></td>
        <td><div style="width:50px;"><?php echo h($skill['TaiChiRank']['name']); ?>&nbsp;</div></td>
        <td><div style="width:20px;"><?php echo h($skill['Skill']['display_order']); ?>&nbsp;</div></td>
        <td class="actions" style="font-size:8px;">
            <div style="width:90px">
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $skill['Skill']['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skill['Skill']['id']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?>
            </div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>








        
<div class="skillTypes index">
    <h3 style="clear:none;margin-top:0px;"><?php echo __('Skill Types'); ?></h3>
    <?php echo $this->Html->link("Add A Skill Type", array('action'=>'addType'),array('escape' => false) ); ?>
    <table cellpadding="0" cellspacing="0" id="pattern-style-b">
        <tr>
            <th>Name</th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($skillTypes as $skillType): ?>
        <tr>
            <td><?php echo h($skillType['SkillType']['name']); ?>&nbsp;</td>
            <td class="actions" style="font-size:8px;">
                <div style="width:90px">
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'editType', $skillType['SkillType']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'deleteType', $skillType['SkillType']['id']), null, __('Are you sure you want to delete # %s?', $skillType['SkillType']['id'])); ?>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>