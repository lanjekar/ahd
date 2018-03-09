<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DistrictMaster Controller
 *
 * @property \App\Model\Table\DistrictMasterTable $DistrictMaster
 *
 * @method \App\Model\Entity\DistrictMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DistrictMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StateMaster']
        ];
        $districtMaster = $this->paginate($this->DistrictMaster);

        $this->set(compact('districtMaster'));
    }

    /**
     * View method
     *
     * @param string|null $id District Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $districtMaster = $this->DistrictMaster->get($id, [
            'contain' => ['StateMaster']
        ]);

        $this->set('districtMaster', $districtMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $districtMaster = $this->DistrictMaster->newEntity();
        if ($this->request->is('post')) {
            $districtMaster = $this->DistrictMaster->patchEntity($districtMaster, $this->request->getData());
            if ($this->DistrictMaster->save($districtMaster)) {
                $this->Flash->success(__('The district master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The district master could not be saved. Please, try again.'));
        }
        $stateMaster = $this->DistrictMaster->StateMaster->find('list', ['limit' => 200]);
        $this->set(compact('districtMaster', 'stateMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id District Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $districtMaster = $this->DistrictMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $districtMaster = $this->DistrictMaster->patchEntity($districtMaster, $this->request->getData());
            if ($this->DistrictMaster->save($districtMaster)) {
                $this->Flash->success(__('The district master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The district master could not be saved. Please, try again.'));
        }
        $stateMaster = $this->DistrictMaster->StateMaster->find('list', ['limit' => 200]);
        $this->set(compact('districtMaster', 'stateMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id District Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $districtMaster = $this->DistrictMaster->get($id);
        if ($this->DistrictMaster->delete($districtMaster)) {
            $this->Flash->success(__('The district master has been deleted.'));
        } else {
            $this->Flash->error(__('The district master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
