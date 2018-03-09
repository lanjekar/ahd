<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LabMaster Controller
 *
 * @property \App\Model\Table\LabMasterTable $LabMaster
 *
 * @method \App\Model\Entity\LabMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LabMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $labMaster = $this->paginate($this->LabMaster);

        $this->set(compact('labMaster'));
    }

    /**
     * View method
     *
     * @param string|null $id Lab Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $labMaster = $this->LabMaster->get($id, [
            'contain' => []
        ]);

        $this->set('labMaster', $labMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $labMaster = $this->LabMaster->newEntity();
        if ($this->request->is('post')) {
            $labMaster = $this->LabMaster->patchEntity($labMaster, $this->request->getData());
            if ($this->LabMaster->save($labMaster)) {
                $this->Flash->success(__('The lab master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lab master could not be saved. Please, try again.'));
        }
        $this->set(compact('labMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lab Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $labMaster = $this->LabMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $labMaster = $this->LabMaster->patchEntity($labMaster, $this->request->getData());
            if ($this->LabMaster->save($labMaster)) {
                $this->Flash->success(__('The lab master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lab master could not be saved. Please, try again.'));
        }
        $this->set(compact('labMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lab Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $labMaster = $this->LabMaster->get($id);
        if ($this->LabMaster->delete($labMaster)) {
            $this->Flash->success(__('The lab master has been deleted.'));
        } else {
            $this->Flash->error(__('The lab master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
