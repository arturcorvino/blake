<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
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
        'Admin.skins/_all-skins.min',
        'Admin./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min',
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

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
        <?= $this->element('Admin.header'); ?>
        <?= $this->element('Admin.menu'); ?>

        <div class="content-wrapper">
            <?= $this->fetch('Admin.content'); ?>
        </div>
        <?= $this->element('Admin.footer'); ?>
        <?php /* $this->element('Admin.config'); */ ?>
    </div>

    <?= $this->Html->script([
        "/components/jquery/dist/jquery.min",
        "/components/bootstrap/dist/js/bootstrap.min",
        "https://code.jquery.com/ui/1.11.4/jquery-ui.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js",
        "Admin./plugins/iCheck/icheck.min",
        "Admin./plugins/morris/morris.min",
        "Admin./plugins/sparkline/jquery.sparkline.min",
        "Admin./plugins/jvectormap/jquery-jvectormap-1.2.2.min",
        "Admin./plugins/jvectormap/jquery-jvectormap-world-mill-en",
        "Admin./plugins/knob/jquery.knob",
        "Admin./plugins/daterangepicker/daterangepicker",
        "Admin./plugins/datepicker/bootstrap-datepicker",
        "Admin./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min",
        "Admin./plugins/slimScroll/jquery.slimscroll.min",
        "Admin./plugins/fastclick/fastclick",
        "Admin.app.min",
        "Admin.pages/dashboard",
        "Admin.demo"
    ]); ?>

    <?= $this->fetch('script'); ?>

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

</body>
</html>


