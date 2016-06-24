<?php if ($_config['current']['controller'] == 'Posts' && $_config['current']['action'] == 'view') { ?>
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?= $this->fetch('title') ?></h1>
                        <?php if (!empty($this->fetch('subtitle'))) { ?>
                            <span class="subheading"><?= $this->fetch('subtitle') ?></span>
                        <?php } ?>
                        <span class="meta">Publicado por <a href="#"><?= $this->fetch('user') ?></a> em August 24, 2014</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php } else { ?>
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?= $this->fetch('title') ?></h1>
                        <hr class="small">
                        <?php if (!empty($this->fetch('subtitle'))) { ?>
                            <span class="subheading"><?= $this->fetch('subtitle') ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php } ?>
