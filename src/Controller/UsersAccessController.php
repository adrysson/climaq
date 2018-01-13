<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersAccess Controller
 *
 * @property \App\Model\Table\UsersAccessTable $UsersAccess
 *
 * @method \App\Model\Entity\UsersAcces[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersAccessController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $usersAccess = $this->paginate($this->UsersAccess);

        $this->set(compact('usersAccess'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Acces id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersAcces = $this->UsersAccess->get($id, [
            'contain' => []
        ]);

        $this->set('usersAcces', $usersAcces);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersAcces = $this->UsersAccess->newEntity();
        if ($this->request->is('post')) {
            $usersAcces = $this->UsersAccess->patchEntity($usersAcces, $this->request->getData());
            if ($this->UsersAccess->save($usersAcces)) {
                $this->Flash->success(__('The users acces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users acces could not be saved. Please, try again.'));
        }
        $this->set(compact('usersAcces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Acces id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersAcces = $this->UsersAccess->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersAcces = $this->UsersAccess->patchEntity($usersAcces, $this->request->getData());
            if ($this->UsersAccess->save($usersAcces)) {
                $this->Flash->success(__('The users acces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users acces could not be saved. Please, try again.'));
        }
        $this->set(compact('usersAcces'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Acces id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersAcces = $this->UsersAccess->get($id);
        if ($this->UsersAccess->delete($usersAcces)) {
            $this->Flash->success(__('The users acces has been deleted.'));
        } else {
            $this->Flash->error(__('The users acces could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
