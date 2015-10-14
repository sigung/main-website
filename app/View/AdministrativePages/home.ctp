<h1>Administration</h1>
<ul class="list-group">
    <li class="input-group list-group-item">
        <?php echo $this->Html->link('Manage Users', '/users/user_management') ?>
    </li>
    <?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->ADMIN)) {  ?>
    <li class="input-group list-group-item">
        <?php echo $this->Html->link('Manual Management', '/manuals/index') ?>
    </li>
    <li class="input-group list-group-item">
        <?php echo $this->Html->link('Role Management', '/roles') ?>
    </li>
    <li class="input-group list-group-item">
        <?php echo $this->Html->link('Studio Management', '/studios') ?>
    </li>
    <li class="input-group list-group-item">
        <?php echo $this->Html->link('System Properties', '/systemProperties') ?>
    </li>
    <li class="input-group list-group-item">
        <?php echo $this->Html->link('Common Email Messages', '/commonEmailMessages') ?>
    </li>
    <li class="input-group list-group-item">
        <?php echo $this->Html->link('User Links', '/userLinks') ?>
    </li>
    <li class="input-group list-group-item">
        <?php echo $this->Html->link('Skills', '/skills') ?>
    </li>
    <?php }?>
</ul>