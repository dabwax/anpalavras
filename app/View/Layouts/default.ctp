<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
        echo $this->Html->css('http://jquery-ui-bootstrap.github.io/jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.3.custom.css');
        echo $this->Html->css('anpalavras');

        echo $this->fetch('meta');
        echo $this->fetch('css');

        echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
        echo $this->Html->script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js');
        echo $this->Html->script('http://jquery-ui-bootstrap.github.io/jquery-ui-bootstrap/assets/js/vendor/jquery-ui-1.10.3.custom.min.js');
        echo $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js');
        echo $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_pt_BR.js');
        echo $this->Html->script('anpalavras');
        echo $this->fetch('script');
    ?>
</head>
<body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Amor nas Palavras</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($this->params['controller'] == 'users' && $this->params['action'] == 'login') : ?>class="active"<?php endif; ?>><a href="<?php echo $this->Html->url( array('controller' => 'users', 'action' => 'login') ); ?>">Entrar</a></li>
        <li <?php if($this->params['controller'] == 'users' && $this->params['action'] == 'add') : ?>class="active"<?php endif; ?>><a href="<?php echo $this->Html->url( array('controller' => 'users', 'action' => 'add') ); ?>">Fazer Cadastro</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
    
            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
</div>
</body>
</html>
