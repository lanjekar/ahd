<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SampleRegistration Controller
 *
 * @property \App\Model\Table\SampleRegistrationTable $SampleRegistration
 *
 * @method \App\Model\Entity\SampleRegistration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SampleRegistrationController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'YearlySamples', 'MonthlySamples', 'States', 'Districts', 'Dispatches']
        ];
        $sampleRegistration = $this->paginate($this->SampleRegistration);

        $this->set(compact('sampleRegistration'));
    }

    /**
     * View method
     *
     * @param string|null $id Sample Registration id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sampleRegistration = $this->SampleRegistration->get($id, [
            'contain' => ['Users', 'YearlySamples', 'MonthlySamples', 'States', 'Districts', 'Dispatches']
        ]);

        $this->set('sampleRegistration', $sampleRegistration);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sampleRegistration = $this->SampleRegistration->newEntity();
        if ($this->request->is('post')) {
            $sampleRegistration = $this->SampleRegistration->patchEntity($sampleRegistration, $this->request->getData());
            if ($this->SampleRegistration->save($sampleRegistration)) {
                $this->Flash->success(__('The sample registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample registration could not be saved. Please, try again.'));
        }
        $users = $this->SampleRegistration->Users->find('list', ['limit' => 200]);
        $yearlySamples = $this->SampleRegistration->YearlySamples->find('list', ['limit' => 200]);
        $monthlySamples = $this->SampleRegistration->MonthlySamples->find('list', ['limit' => 200]);
        $states = $this->SampleRegistration->States->find('list', ['limit' => 200]);
        $districts = $this->SampleRegistration->Districts->find('list', ['limit' => 200]);
        $dispatches = $this->SampleRegistration->Dispatches->find('list', ['limit' => 200]);
        $this->set(compact('sampleRegistration', 'users', 'yearlySamples', 'monthlySamples', 'states', 'districts', 'dispatches'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sample Registration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sampleRegistration = $this->SampleRegistration->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sampleRegistration = $this->SampleRegistration->patchEntity($sampleRegistration, $this->request->getData());
            if ($this->SampleRegistration->save($sampleRegistration)) {
                $this->Flash->success(__('The sample registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample registration could not be saved. Please, try again.'));
        }
        $users = $this->SampleRegistration->Users->find('list', ['limit' => 200]);
        $yearlySamples = $this->SampleRegistration->YearlySamples->find('list', ['limit' => 200]);
        $monthlySamples = $this->SampleRegistration->MonthlySamples->find('list', ['limit' => 200]);
        $states = $this->SampleRegistration->States->find('list', ['limit' => 200]);
        $districts = $this->SampleRegistration->Districts->find('list', ['limit' => 200]);
        $dispatches = $this->SampleRegistration->Dispatches->find('list', ['limit' => 200]);
        $this->set(compact('sampleRegistration', 'users', 'yearlySamples', 'monthlySamples', 'states', 'districts', 'dispatches'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sample Registration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sampleRegistration = $this->SampleRegistration->get($id);
        if ($this->SampleRegistration->delete($sampleRegistration)) {
            $this->Flash->success(__('The sample registration has been deleted.'));
        } else {
            $this->Flash->error(__('The sample registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
