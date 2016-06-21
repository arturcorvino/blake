<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= $this->fetch('title') ?></title>

        <?= $this->Html->css([
            'https://fonts.googleapis.com/css?family=Open+Sans:300,600',
            'https://fonts.googleapis.com/css?family=Merriweather:300,700',
        ]) ?>

        <?= $this->Html->css([
            '/components/bootstrap/dist/css/bootstrap.min',
            '/components/components-font-awesome/css/font-awesome.min',
            'custom',
        ]) ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?= $this->Html->css([
                'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js',
                'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
            ]) ?>
        <![endif]-->

        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>
    <body>

        <?= $this->element('menu') ?>
        <?= $this->element('header') ?>

        <?= $this->fetch('content') ?>
        <hr>

        <?= $this->element('footer') ?>

        <?= $this->Html->script([
            "/components/jquery/dist/jquery.min",
            "/components/bootstrap/dist/js/bootstrap.min",
            "application",
        ]) ?>

        <?= $this->fetch('script') ?>
    </body>
</html>
