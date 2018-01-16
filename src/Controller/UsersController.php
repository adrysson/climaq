<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->allow('register');

    }    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function register()
    {
      if($this->request->session()->check('Auth.User')){
        $this->redirect(['controller'=>'Climate','action'=>'index']);
      }

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso.'));

                $this->redirect(['controller'=>'Climate','action'=>'index']);
            }
            $this->Flash->error(__('Devido a um erro não foi possível realizar o cadastro. Tente novamente.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if(!$user->user_id == $this->request->session()->read('Auth.User.user_id')){
          return $this->redirect(['controller'=>'Pages', 'action'=>'display']);
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Alterações salvas com sucesso.'));

                return $this->redirect(['controller'=>'Pages', 'action'=>'display']);
            }
            $this->Flash->error(__('Devido a um erro as alterações não foram salvas. Tente novamente.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);

        if ($this->Users->delete($user)) {
            $this->Auth->logout();
            $this->Flash->success(__('Usuário removido com sucesso.'));
        } else {
            $this->Flash->error(__('Devido a um erro não foi possível remover o usuário. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
      if($this->request->session()->check('Auth.User')){
        $this->redirect(['controller'=>'Climate','action'=>'index']);
      }

      if($this->request->is('post')){
        $user = $this->Auth->identify();
        if($user){
          $this->Auth->setUser($user);
          return $this->redirect(['controller'=>'Climate', 'action'=>'index']);
        }
      }
    }

    public function logout()
    {
      $this->Auth->logout();
      return $this->redirect(['action'=>'login']);
    }
}
