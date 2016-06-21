<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($data as $row) { ?>
                <div class="post-preview">
                    <?= $this->Html->link(
                        '<h2 class="post-title">'.$row->title.'</h2>'.
                        '<h3 class="post-subtitle">'.$row->subtitle.'</h3>',
                        [
                            'plugin' => null,
                            'controller' => 'Posts',
                            'action' => 'view',
                            'id' => $row->id,
                            'title' => Cake\Utility\Inflector::slug(strtolower($row->title), $replacement = '-')
                        ],
                        [
                            'escape' => false,
                        ]
                    ); ?>
                    <p class="post-meta">
                        Publicação por <a href="javascript:;"><?= $row->user->user ?></a> em <?= $row->created->i18nFormat('d/m/Y H:i:s'); ?>
                    </p>
                </div>
                <hr>
            <?php } ?>

            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
