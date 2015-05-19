<div class="studios index">
    <h3 style="clear:none;margin-top:0px;"><?php echo __('Studios'); ?></h3>
    <div style="float:right;">
        <?php echo $this->Html->link("Back to Admin", array('controller'=>'admin_pages', 'action'=>'admin_home'),array('escape' => false) ); ?>
    </div>
    <?php echo $this->Html->link("Add A New Studio", array('action'=>'add'),array('escape' => false) ); ?>

    <table cellpadding="0" cellspacing="0" id="pattern-style-b">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($studios as $studio): ?>
        <tr>
            <td><?php echo h($studio['Studio']['name']); ?>&nbsp;</td>
            <td><?php echo h($studio['Studio']['address']); ?>&nbsp;</td>
            <td><?php echo h($studio['Studio']['phone']); ?>&nbsp;</td>
            <td><?php echo h($studio['Studio']['email']); ?>&nbsp;</td>
            <td class="actions" style="font-size:8px;">
                <div style="width:90px">
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studio['Studio']['id'])); ?>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>