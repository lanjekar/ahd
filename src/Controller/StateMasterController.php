<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StateMaster Controller
 *
 * @property \App\Model\Table\StateMasterTable $StateMaster
 *
 * @method \App\Model\Entity\StateMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StateMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $stateMaster = $this->paginate($this->StateMaster);

        $this->set(compact('stateMaster'));
    }

    /**
     * View method
     *
     * @param string|null $id State Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stateMaster = $this->StateMaster->get($id, [
            'contain' => []
        ]);

        $this->set('stateMaster', $stateMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stateMaster = $this->StateMaster->newEntity();
        if ($this->request->is('post')) {
            $stateMaster = $this->StateMaster->patchEntity($stateMaster, $this->request->getData());
            if ($this->StateMaster->save($stateMaster)) {
                $this->Flash->success(__('The state master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state master could not be saved. Please, try again.'));
        }
        $this->set(compact('stateMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id State Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stateMaster = $this->StateMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stateMaster = $this->StateMaster->patchEntity($stateMaster, $this->request->getData());
            if ($this->StateMaster->save($stateMaster)) {
                $this->Flash->success(__('The state master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state master could not be saved. Please, try again.'));
        }
        $this->set(compact('stateMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id State Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stateMaster = $this->StateMaster->get($id);
        if ($this->StateMaster->delete($stateMaster)) {
            $this->Flash->success(__('The state master has been deleted.'));
        } else {
            $this->Flash->error(__('The state master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
