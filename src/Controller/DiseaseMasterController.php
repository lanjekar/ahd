<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DiseaseMaster Controller
 *
 * @property \App\Model\Table\DiseaseMasterTable $DiseaseMaster
 *
 * @method \App\Model\Entity\DiseaseMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiseaseMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $diseaseMaster = $this->paginate($this->DiseaseMaster);

        $this->set(compact('diseaseMaster'));
    }

    /**
     * View method
     *
     * @param string|null $id Disease Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diseaseMaster = $this->DiseaseMaster->get($id, [
            'contain' => []
        ]);

        $this->set('diseaseMaster', $diseaseMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diseaseMaster = $this->DiseaseMaster->newEntity();
        if ($this->request->is('post')) {
            $diseaseMaster = $this->DiseaseMaster->patchEntity($diseaseMaster, $this->request->getData());
            if ($this->DiseaseMaster->save($diseaseMaster)) {
                $this->Flash->success(__('The disease master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disease master could not be saved. Please, try again.'));
        }
        $this->set(compact('diseaseMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disease Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diseaseMaster = $this->DiseaseMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diseaseMaster = $this->DiseaseMaster->patchEntity($diseaseMaster, $this->request->getData());
            if ($this->DiseaseMaster->save($diseaseMaster)) {
                $this->Flash->success(__('The disease master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disease master could not be saved. Please, try again.'));
        }
        $this->set(compact('diseaseMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disease Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diseaseMaster = $this->DiseaseMaster->get($id);
        if ($this->DiseaseMaster->delete($diseaseMaster)) {
            $this->Flash->success(__('The disease master has been deleted.'));
        } else {
            $this->Flash->error(__('The disease master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
