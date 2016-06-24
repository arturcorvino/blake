<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('Artur F. C. Rosa', [
                'controller' => 'Posts',
                'action' => 'index',
            ], [
                'escape' => false,
                'class' => 'navbar-brand'
            ]); ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?= $this->Html->link('Página Inicial', [
                        'controller' => 'Posts',
                        'action' => 'index',
                    ], [
                        'escape' => false,
                    ]); ?>
                </li>
                <li>
                    <a href="about.html">Sobre</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
