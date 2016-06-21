<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?= $this->fetch('title') ?></h1>
                    <hr class="small">
                    <span class="subheading"><?= !empty($this->fetch('subtitle')) ? $this->fetch('subtitle') : null ?></span>
                    <span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                </div>
            </div>
        </div>
    </div>
</header>
