<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TestMaster Controller
 *
 * @property \App\Model\Table\TestMasterTable $TestMaster
 *
 * @method \App\Model\Entity\TestMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $testMaster = $this->paginate($this->TestMaster);

        $this->set(compact('testMaster'));
    }

    /**
     * View method
     *
     * @param string|null $id Test Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testMaster = $this->TestMaster->get($id, [
            'contain' => []
        ]);

        $this->set('testMaster', $testMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testMaster = $this->TestMaster->newEntity();
        if ($this->request->is('post')) {
            $testMaster = $this->TestMaster->patchEntity($testMaster, $this->request->getData());
            if ($this->TestMaster->save($testMaster)) {
                $this->Flash->success(__('The test master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test master could not be saved. Please, try again.'));
        }
        $this->set(compact('testMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Test Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testMaster = $this->TestMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testMaster = $this->TestMaster->patchEntity($testMaster, $this->request->getData());
            if ($this->TestMaster->save($testMaster)) {
                $this->Flash->success(__('The test master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test master could not be saved. Please, try again.'));
        }
        $this->set(compact('testMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Test Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testMaster = $this->TestMaster->get($id);
        if ($this->TestMaster->delete($testMaster)) {
            $this->Flash->success(__('The test master has been deleted.'));
        } else {
            $this->Flash->error(__('The test master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
