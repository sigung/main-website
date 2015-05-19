<script type="text/javascript">
    $(function() {
        $( "#tabs" ).tabs();
    });

    function fixPhotoIframe() {
        $('#photoFrame').contents().find('html').attr('style','overflow:hidden');
        if (!$('#photoFrame').contents().find('img').attr('height')) {
            $('#photoFrame').contents().find('img').attr('height','400');
        }
    }
</script>
<legend><?php echo $this->Html->link('Back To Manage Users', '/users/user_management') ?></legend>
<h4>USER: <?php echo($this->data['UserInfo']['fname']);?> <?php echo($this->data['UserInfo']['lname']);?></h4>
<div id="tabs">
    <fieldset>
    <ul>
        <li><a href="#tabs-1">User Information</a></li>
        <li><a href="#tabs-2">Ranks - Roles</a></li>
        <li><a href="#tabs-3">Comments</a></li>
    </ul>

    <?php echo $this->element('user_management_tab_1'); ?>
    <?php echo $this->element('user_management_tab_2'); ?>
    <?php echo $this->element('user_management_tab_3'); ?>

    </fieldset>
</div>