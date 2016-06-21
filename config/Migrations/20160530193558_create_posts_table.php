<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreatePostsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('posts');
        $table
            ->addColumn('user_id', 'string')
            ->addColumn('title', 'string')
            ->addColumn('subtitle', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('post', 'text')
            ->addColumn('image', 'string', ['null' => true])
            ->addColumn('status', 'integer', ['limit' => 1, 'default' => 0]) // 0 => rascunho, 1 - publicar / publicado
            ->addColumn('enabled', 'integer', ['limit' => MysqlAdapter::INT_TINY, 'default' => 1])
            ->addColumn('begin_at', 'datetime', ['null' => true])
            ->addColumn('expire_at', 'datetime', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
