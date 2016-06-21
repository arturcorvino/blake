<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class PostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $query = $this->Posts->find('all')
            ->select([
                'Posts.id',
                'Posts.title',
                'Posts.subtitle',
                'Posts.created',
            ])
            ->where([
                'Posts.status' => 1,
                'Posts.enabled' => 1,
                'OR' => [
                    'Posts.begin_at IS NULL',
                    'CURRENT_TIMESTAMP > Posts.begin_at',
                ],
            ])
            ->contain([
                'Users' => function ($q) {
                    return $q->select(['id', 'user', 'name']);
                }
            ]);

        $data = $this->paginate($query);
        $this->set(compact('data'));
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($title = null, $id = null)
    {
        if ($id) {
            $query = $this->Posts->find()
                ->select([
                    'Posts.id',
                    'Posts.title',
                    'Posts.subtitle',
                    'Posts.post',
                    'Posts.image',
                    'Posts.created',
                ])
                ->where([
                    'Posts.id' => $id,
                    'Posts.status' => 1,
                    'Posts.enabled' => 1,
                    'OR' => [
                        'Posts.begin_at IS NULL',
                        'CURRENT_TIMESTAMP > Posts.begin_at',
                    ],
                ])
                ->contain([
                    'Users' => function ($q) {
                        return $q->select(['id', 'user', 'name']);
                    }
                ]);

            $data = $query->first();
            if (empty($data)) {
                throw new NotFoundException(__('Publicação não encontrada.'));
            }
            $this->set(compact('data'));

        } else {
            throw new NotFoundException(__('Publicação não encontrada.'));
        }
    }

}
