<script type="text/javascript">
    function clearSearchFilter() {
        $('#UserFnfilter').val('');
        $('#UserLnfilter').val('');
        $('#UserMrfilter :nth-child(1)').prop('selected', true);
        $('#UserKffilter :nth-child(1)').prop('selected', true);
        $('#UserTcfilter :nth-child(1)').prop('selected', true);
        $('#UserSfilter :nth-child(1)').prop('selected', true);
        $('#UserStatfilter :nth-child(1)').prop('selected', true);
    }
</script>

<div class="users form">
    <h3 style="clear:none;margin-top:0px;">User Management</h3>
    <div style="float:right;">
        <?php echo $this->Html->link( "Back to Admin", array('controller'=>'admin_pages', 'action'=>'admin_home'),array('escape' => false) ); ?>
    </div>
    <?php echo $this->Html->link( "Add A New User", array('action'=>'add'),array('escape' => false) ); ?>
    <table id="hor-minimalist-b" style="margin:0px;">
        <tr>
            <td style="white-space: nowrap;">First Name</td>
            <td style="white-space: nowrap;">Last Name</td>
            <td>Manager</td>
            <td>Kung Fu</td>
            <td>Tai Chi</td>
            <td>Studio</td>
            <td></td>
        </tr>
        <tr>
            <?php echo $this->Form->create('User', array('action'=>'user_management')); ?>
            <td><?php echo $this->Form->input('fnfilter', array('label'=>'', 'style'=>'font-size:8px; width:50px; height:20px;')); ?></td>
            <td><?php echo $this->Form->input('lnfilter', array('label'=>'', 'style'=>'font-size:8px; width:50px; height:20px;')); ?></td>
            <td><?php echo $this->Form->input('mrfilter', array('empty'=>'Choose Manager Role', 'options' => $mrroles, 'label'=>'', 'style'=>'font-size:8px; width:150px; height:20px; white-space: nowrap;')); ?></td>
            <td><?php echo $this->Form->input('kfrfilter', array('empty'=>'Choose Kung Fu Rank', 'options' => $kfranks, 'label'=>'', 'style'=>'font-size:8px; width:150px; height:20px;')); ?></td>
            <td><?php echo $this->Form->input('tcrfilter', array('empty'=>'Choose Tai Chi Rank', 'options' => $tcranks, 'label'=>'', 'style'=>'font-size:8px; width:150px; height:20px;')); ?></td>
            <td><?php echo $this->Form->input('sfilter', array('empty'=>'Choose Studio', 'options' => $studios, 'label'=>'', 'style'=>'font-size:8px; width:150px; height:20px;')); ?></td>
            <td><?php echo $this->Form->input('statfilter', array('empty'=>'Choose Status', 'options' => $statuses, 'label'=>'', 'style'=>'font-size:8px; width:150px; height:20px;')); ?></td>
            <td><?php echo $this->Form->button('Clear', array('type'=>'reset', 'onclick'=>'clearSearchFilter();')); ?></td>
            <td><?php echo $this->Form->submit('Go!', array('div' => false,'class' => 'urclass', 'title' => 'Filter Results')); ?></td>
            <?php echo $this->Form->end(); ?>
        </tr>
    </table>
    <br/>
    <?php if ($users) { ?>
    <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
    <?php echo $this->Paginator->numbers(array( 'class' => 'numbers' ));?>
    <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' =>'disabled'));?>
    <table id="pattern-style-b">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('UserInfo.fname', 'First');?></th>
            <th><?php echo $this->Paginator->sort('UserInfo.lname', 'Last');?></th>
            <th>Role</th>
            <th><?php echo $this->Paginator->sort('KungFuRank.name', 'KF');?></th>
            <th><?php echo $this->Paginator->sort('TaiChiRank.name', 'TC');?></th>
            <th style="white-space: nowrap;">Email/Phone</th>
            <th>Address</th>
            <th style="white-space: nowrap;">Spouse Guardian</th>
            <th><?php echo $this->Paginator->sort('UserInfo.birthdate', 'Birthday');?></th>
            <th><?php echo $this->Paginator->sort('Status.name', 'Status');?></th>
            <th><?php if ($this->User->isManager(AuthComponent::user('id'))) {  ?>Actions<?php } ?></th>
        </tr>
        </thead>
        <tbody>
        <?php $count=0; ?>
        <?php foreach($users as $user): ?>
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '
        <tr class="zebra">' ?>
            <?php endif; ?>
            <td><div style="width:80px"><?php echo $user['UserInfo']['fname']; ?></div></td>
            <td><div style="width:80px"><?php echo $user['UserInfo']['lname']; ?></div></td>
            <td>
                <?php foreach ($user['UserRoleStudio'] as $urs) { ?>
                    <div style="white-space: nowrap;">
                        <?php echo($roles[$urs['role_id']]); ?>
                        <?php if ($urs['studio_id'] != 0) {
                            echo(' - '.$studios[$urs['studio_id']].'<br>');
                        }
                        ?>
                    </div>
                <?php } ?>
            </td>
            <td>
                <?php echo $user['KungFuRank']['name']; ?>
            </td>
            <td>
                <?php echo $user['TaiChiRank']['name']; ?>
            </td>
            <td style="font-size: 8px;">
                <div style="white-space: nowrap;"><?php echo $user['User']['email']; ?></div>
                <?php if (!empty($user['UserInfo']['homephone'])) { ?>
                    <div style="white-space: nowrap;">HP: <?php echo $user['UserInfo']['homephone']; ?></div>
                <?php } ?>
                <?php if (!empty($user['UserInfo']['cellphone'])) { ?>
                    <div style="white-space: nowrap;">CP: <?php echo $user['UserInfo']['cellphone']; ?></div>
                <?php } ?>
                <?php if (!empty($user['UserInfo']['workphone'])) { ?>
                    <div style="white-space: nowrap;">WP: <?php echo $user['UserInfo']['workphone']; ?></div>
                <?php } ?>
            </td>
            <td style="font-size: 8px;">
                <div style="white-space: nowrap"><?php echo $user['UserInfo']['address']; ?></div>
                <div style="white-space: nowrap">
                    <?php if (!empty($user['UserInfo']['spouseguardian'])) { ?><?php echo $user['UserInfo']['city']; ?>,<?php } ?>
                    <?php echo $user['UserInfo']['state']; ?> <?php echo $user['UserInfo']['zip']; ?>
                </div>
            </td>
            <td>
                <?php if (!empty($user['UserInfo']['spouseguardian'])) { ?>
                    <div style="white-space: nowrap;"><?php echo $user['UserInfo']['spouseguardian']; ?></div>
                <?php } ?>
                <?php if (!empty($user['UserInfo']['sgphone'])) { ?>
                    <div style="white-space: nowrap;">Phone: <?php echo $user['UserInfo']['sgphone']; ?></div>
                <?php } ?>
                <?php if (!empty($user['UserInfo']['sgcellphone'])) { ?>
                    <div style="white-space: nowrap;">CP: <?php echo $user['UserInfo']['sgcellphone']; ?></div>
                <?php } ?>
            </td>
            <td>
                <div style="white-space: nowrap;"><?php echo $user['UserInfo']['birthdate']; ?></div>
            </td>
            <td>
                <div style="width:50px;"><?php echo $user['Status']['name']; ?></div>
            </td>
            <td style="font-size:8px;">
                <?php if ($this->User->isManager(AuthComponent::user('id'))) {  ?>
                <div style="width:90px">
                    <?php echo $this->Html->link("Edit", array('action'=>'edit', $user['User']['id']), array('style'=>'font-size:8px;')); ?> |
                    <?php echo $this->Html->link( "Delete", array('action'=>'delete', $user['User']['id']), array('style'=>'font-size:8px;',
                                                    'onclick'=>'return confirm("Are you sure you want to delete this user?")'));?> |
                    <?php if ($user['Status']['id'] != 3) { ?>
                        <?php echo $this->Html->link("Activate", array('action'=>'activate', $user['User']['id']), array('style'=>'font-size:8px;')); ?>
                    <?php } else if ($user['Status']['id'] == 3) { ?>
                    <?php echo $this->Html->link("Disable", array('action'=>'disable', $user['User']['id']), array('style'=>'font-size:8px;')); ?>
                    <?php } ?>
                </div>
                <?php } ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php unset($user); ?>
        </tbody>
    </table>
    <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
    <?php echo $this->Paginator->numbers(array( 'class' => 'numbers' ));?>
    <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' =>'disabled'));?>
    <br>
    <?php echo $this->Html->link( "Add A New User", array('action'=>'add'),array('escape' => false) ); ?>
    <?php } else { ?>
    <br>
    No users found.
    <?php } ?>
</div>
<br/>