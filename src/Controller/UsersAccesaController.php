<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersAccesa Controller
 *
 *
 * @method \App\Model\Entity\UsersAccesa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersAccesaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $usersAccesa = $this->paginate($this->UsersAccesa);

        $this->set(compact('usersAccesa'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Accesa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersAccesa = $this->UsersAccesa->get($id, [
            'contain' => []
        ]);

        $this->set('usersAccesa', $usersAccesa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersAccesa = $this->UsersAccesa->newEntity();
        if ($this->request->is('post')) {
            $usersAccesa = $this->UsersAccesa->patchEntity($usersAccesa, $this->request->getData());
            if ($this->UsersAccesa->save($usersAccesa)) {
                $this->Flash->success(__('The users accesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users accesa could not be saved. Please, try again.'));
        }
        $this->set(compact('usersAccesa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Accesa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersAccesa = $this->UsersAccesa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersAccesa = $this->UsersAccesa->patchEntity($usersAccesa, $this->request->getData());
            if ($this->UsersAccesa->save($usersAccesa)) {
                $this->Flash->success(__('The users accesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users accesa could not be saved. Please, try again.'));
        }
        $this->set(compact('usersAccesa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Accesa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersAccesa = $this->UsersAccesa->get($id);
        if ($this->UsersAccesa->delete($usersAccesa)) {
            $this->Flash->success(__('The users accesa has been deleted.'));
        } else {
            $this->Flash->error(__('The users accesa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
