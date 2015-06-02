<div class="manuals index">
    <h3 style="clear:none;margin-top:0px;">Train</h3>
    <div style="float:right;">
        <?php echo $this->Html->link( "Back Home", array('controller'=>'users', 'action'=>'user_home'),array('escape' => false) ); ?>
    </div>

    <ul class='home_links'>
        <?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->STUDENT)) {  ?>
        <li>
            <div style="height:190px;">
                <?php echo $this->Html->link('Speed Drill', '/students/speed_drill', array('target'=>'_blank')) ?> - If you don't know it, pick one you do know...  READY... SET...
                <?php echo $this->Html->link('GO', '/students/speed_drill', array('target'=>'_blank')) ?>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>