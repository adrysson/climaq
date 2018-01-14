<?php

$cakeDescription = 'Climaq - Previsão do tempo em tempo real';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('cake.css') ?>

    <!-- Bootstrap -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome/css/font-awesome.css') ?>

    <!-- Stylesheet -->

    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('prettyPhoto.css') ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Lato:400,700,900,300') ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300') ?>
    <?= $this->Html->script('modernizr.custom.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <!-- Navigation
      ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/"><i class="fa fa-sun-o"></i> Climaq<strong></strong></a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home" class="page-scroll">Home</a></li>
          <li><a href="#services-section" class="page-scroll">Services</a></li>
          <li><a href="#works-section" class="page-scroll">Portfolio</a></li>
          <li><a href="#about-section" class="page-scroll">About</a></li>
          <li><a href="#team-section" class="page-scroll">Team</a></li>
          <li><a href="#contact-section" class="page-scroll">Contact</a></li>
          <?php if($this->request->here == '/users/cadastrar'):?>
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Users Access'), ['controller' => 'UsersAccess', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Users Acces'), ['controller' => 'UsersAccess', 'action' => 'add']) ?></li>
          <?php endif ?>
          <?php if($this->request->session()->check('Auth.User')):?>
            <li><?= $this->Html->link(__('Logout'),['controller'=>'users','action'=>'logout']) ?></li>
          <?php endif ?>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

    <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    <footer>

      <div id="footer">
        <div class="container">
          <div class="fnav">
            <p>Copyright &copy; Adrysson. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
          </div>
        </div>
      </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') ?>
      <?= $this->Html->script('jquery.1.11.1.js') ?>

      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <?= $this->Html->script('bootstrap.js') ?>
      <?= $this->Html->script('jquery.counterup.js') ?>
      <?= $this->Html->script('waypoints.js') ?>
      <?= $this->Html->script('jquery.prettyPhoto.js') ?>
      <?= $this->Html->script('jquery.isotope.js') ?>
      <?= $this->Html->script('jqBootstrapValidation.js') ?>

      <!-- Javascripts -->
      <?= $this->Html->script('main.js') ?>

    </footer>
</body>
</html>
