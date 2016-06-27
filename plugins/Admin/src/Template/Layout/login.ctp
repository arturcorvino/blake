<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset(); ?>
    <title>Blake Admin - <?= $this->fetch('title'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <?= $this->Html->css([
        '/components/bootstrap/dist/css/bootstrap.min',
        '/components/components-font-awesome/css/font-awesome.min',
        'Admin.AdminLTE.min',
        'Admin./plugins/iCheck/square/blue',
    ]); ?>

    <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <?= $this->Html->script([
            '/plugins/respond.min',
            '/plugins/excanvas.min',
        ]); ?>
    <![endif]-->

    <?= $this->fetch('meta'); ?>
    <?= $this->fetch('css'); ?>

    <?= $this->Html->meta('favicon.ico', '/favicon.ico', ['type' => 'icon']); ?>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="../../index2.html" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <?= $this->Html->script([
        "/components/jquery/dist/jquery.min",
        "/components/bootstrap/dist/js/bootstrap.min",
        "Admin./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min",
        "Admin./plugins/iCheck/icheck.min",
        "Admin./plugins/slimScroll/jquery.slimscroll.min",
        "https://code.jquery.com/ui/1.11.4/jquery-ui.min.js",
        'Admin.app.min',
        'Admin.pages/dashboard',
        'Admin.demo',
    ]); ?>

    <?= $this->fetch('script'); ?>

</body>
</html>
