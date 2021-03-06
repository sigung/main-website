<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords"
          content="Kung Fu, Tai Chi, Tai Chi Chuan, self defense, karate, fitness, sandy, Utah, Arizona, Marital Arts">
    <meta name="Description"
          content="<?php echo($pageDescription);?>">
    <title><?php echo($pageTitle);?></title>
    <?php
        echo $this->Html->css('persistant');
        echo $this->Html->css('datepicker');
        echo $this->Html->css('shaolinarts');
        echo $this->Html->script('jquery-1.11.1.min.js');
        echo $this->Html->script('jquery.fastLiveFilter.js');
        echo $this->Html->script('bootstrap.min.js');
        echo $this->Html->script('bootstrap-datepicker.js');
    ?>
    <script type="text/javascript">
    function showEdit() {
        $('.noEdit').hide();
        $('.editable-content').show();
    }
    function hideEdit() {
        $('.noEdit').show();
        $('.editable-content').hide();
    }
    function submitAndClose() {
        $('#ContentForPageEditForm').submit();
        hideEdit();
    }

    function gotoTop()
    {
        $('body,html').animate({scrollTop: 0}, 800);
    }

    </script>
</head>
<body>
<div class="container">
    <div class="row header">
        <?php echo $this->element('banner'); ?>
        <?php if ($isSideColumn) { ?>
        <?php echo $this->element('navigation_w_contact'); ?>
        <?php } else { ?>
        <?php echo $this->element('navigation'); ?>
        <?php } ?>
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Session->flash(); ?>
        <div class="row corpus">
            <?php echo $this->Form->create('ContentForPage', array('action'=>'edit')); ?>
            <?php echo $this->Form->hidden('id', array('value'=>$pageContentId)); ?>
            <?php
                $sideColumnMD = 12;
                if ($isSideColumn) {
                $sideColumnMD = 9;
            ?>
            <div class="col-md-3 asideColumn hidden-xs hidden-sm">
                <section class="contentCol cms-editable editable-content" id="editContent" style="display:none;">
                    <?php echo $this->Form->input('contentAside', array('type' => 'textarea', 'label'=>'', 'cols'=>'30', 'rows'=>'60', 'value'=>$pageContentAside, 'escape'=>false));?>
                </section>
                <aside class="contentCol noEdit">
                    <?php echo($pageContentAside);?>
                </aside>
            </div>
            <?php } ?>
            <div class="col-md-<?php echo $sideColumnMD; ?> sectionContent">
                <?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->ADMIN)) {  ?>
                <div style="position:absolute; right:20px;'">
                    <?php echo $this->Html->link('Edit Content', '#', array('onclick'=>'showEdit()', 'class'=>'noEdit')) ?>
                    <?php echo $this->Html->link('Save Content and Close', '#', array('onclick'=>'submitAndClose(); return false;', 'class'=>'editable-content', 'style'=>'display:none')) ?>
                </div>
                <section class="contentCol cms-editable editable-content" id="editContent" style="display:none;">
                    <?php echo $this->Form->input('content', array('type' => 'textarea', 'label'=>'', 'cols'=>'100', 'rows'=>'180', 'value'=>$pageContent, 'escape'=>false));?>
                </section>
                <?php } ?>
                <?php echo $this->Form->end(); ?>
                <section class="contentCol cms-editable noEdit" id="mainContent">
                    <?php echo $this->fetch('content'); ?>
                    <?php echo($pageContent); ?>
                    <a href=javascript:void(0); onclick=gotoTop();>Top</a>

                </section>
            </div>

        </div>

        <div class="row footer">
            <div class="col-md-12">
                <footer>
                    <p>
                        <?php if ($this->params->controller == "pages") { ?>
                            (623) 581-2000 Peoria, AZ &bull; (801) 566-6364 Sandy, UT &bull; (801) 967-2300 Taylorsville, UT
                        <?php } else if ($this->params->controller == "sandy") { ?>
                            (801) 566-6364 Sandy, UT
                        <?php } else if ($this->params->controller == "taylorsville") { ?>
                            (801) 967-2300 Taylorsville, UT
                        <?php } else if ($this->params->controller == "glendale"){ ?>
                            (623) 581-2000 Peoria, AZ
                        <?php } ?>
                        <br/>
                        <small>&copy; Copyright 2010 - 2013 Shaolin Arts, LLC. All Rights Reserved.</small>
                    </p>
                </footer>
            </div>
        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</div>
</body>
</html>