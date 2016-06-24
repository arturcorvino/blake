<?php $this->assign('title', $data->title); ?>
<?php $this->assign('subtitle', $data->subtitle); ?>
<?php $this->assign('user', $data->user->user); ?>
<?php $this->assign('userName', $data->user->name); ?>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?= $data->post; ?>
            </div>
        </div>
    </div>
</article>
