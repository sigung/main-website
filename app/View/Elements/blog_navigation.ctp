<nav class="navbar navbar-inverse" role="navigation">    <div class="container-fluid">        <!-- Brand and toggle get grouped for better mobile display -->        <div class="navbar-header">            <button type="button" class="navbar-toggle" data-toggle="collapse"                    data-target="#bs-example-navbar-collapse-1">                <span class="sr-only">Toggle navigation</span>                <span class="icon-bar"></span>                <span class="icon-bar"></span>                <span class="icon-bar"></span>            </button>            <a class="navbar-brand hidden-md hidden-lg hidden-sm" href="#">Shaolin Arts</a>        </div>        <!-- Collect the nav links, forms, and other content for toggling -->        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">            <ul class="nav navbar-nav">                <li>                    <a href="<?php echo $this->webroot;?>">Home</a>                </li>                <li>                    <?php echo $this->Html->link('Kung Fu', '/kung_fu') ?>                </li>                <li>                    <?php echo $this->Html->link('Tai Chi', '/tai_chi') ?>                </li>                <li>                    <?php echo $this->Html->link('Self Defense', '/self_defense') ?>                </li>                <li>                    <?php echo $this->Html->link('Blog', '/blog') ?>                </li>                <li class="dropdown">                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Information<b class="caret"></b></a>                    <ul class="dropdown-menu">                        <li>                            <?php echo $this->Html->link('About Shaolin Arts', '/about') ?>                        </li>                        <li>                            <?php echo $this->Html->link('Class Information', '/class_information') ?>                        </li>                        <li>                            <?php echo $this->Html->link('Current Events', '/current_events') ?>                        </li>                        <li>                            <?php echo $this->Html->link('Locations', '/locations') ?>                        </li>                        <li>                            <?php echo $this->Html->link('Contact Us', '/contact_us') ?>                        </li>                        <li>                            <?php echo $this->Html->link('Blog', '/blog') ?>                        </li>                        <li class="divider"></li>                        <li>                            <?php echo $this->Html->link('History & Philosophy', '/history_and_philosophy') ?>                        </li>                        <li>                            <?php echo $this->Html->link('Mixed Martial Arts', '/mixed_martial_arts') ?>                        </li>                        <li>                            <?php echo $this->Html->link('Fitness', '/fitness') ?>                        </li>                        <li class="divider"></li>                        <li>                            <?php echo $this->Html->link('FAQ', '/faq') ?>                        </li>                    </ul>                </li>            </ul>            <ul class="nav navbar-nav navbar-right">                <?php if (AuthComponent::user()) { ?>                <li class="dropdown">                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo(AuthComponent::user('email'));?><b class="caret"></b></a>                    <ul class="dropdown-menu">                        <li>                            <?php echo $this->Html->link('User Home', '/users/user_home') ?>                        </li>                        <li class="divider"></li>                        <li>                            <?php echo $this->Html->link('Train', '/students/train') ?>                        </li>                        <li class="divider"></li>                        <li>                            <?php echo $this->Html->link('Record', '/students/record') ?>                        </li>                        <li class="divider"></li>                        <li>                            <?php echo $this->Html->link('Learn', '/students/learn') ?>                        </li>                        <li class="divider"></li>                        <li>                            <?php echo $this->Html->link('Play', '/students/play') ?>                        </li>                        <li class="divider"></li>                        <li>                            <?php echo $this->Html->link('Account', '/users/account') ?>                        </li>                        <?php if ($this->User->isOfThisType(AuthComponent::user('id'), $this->User->ADMIN)) {  ?>                        <li class="divider"></li>                        <li>                            <?php echo $this->Html->link('Admin', '/administrative_pages/home') ?>                        </li>                        <?php } ?>                    </ul>                </li>                <li>                    <?php echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout')); ?>                </li>                <?php } else { ?>                <!--<li>                <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?>                </li>-->                <?php } ?>            </ul>        </div>        <!-- /.navbar-collapse -->    </div>    <!-- /.container-fluid --></nav>