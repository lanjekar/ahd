<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BreedMaster Controller
 *
 * @property \App\Model\Table\BreedMasterTable $BreedMaster
 *
 * @method \App\Model\Entity\BreedMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BreedMasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SpeciesMaster']
        ];
        $breedMaster = $this->paginate($this->BreedMaster);

        $this->set(compact('breedMaster'));
    }

    /**
     * View method
     *
     * @param string|null $id Breed Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $breedMaster = $this->BreedMaster->get($id, [
            'contain' => ['SpeciesMaster']
        ]);

        $this->set('breedMaster', $breedMaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $breedMaster = $this->BreedMaster->newEntity();
        if ($this->request->is('post')) {
            $breedMaster = $this->BreedMaster->patchEntity($breedMaster, $this->request->getData());
            if ($this->BreedMaster->save($breedMaster)) {
                $this->Flash->success(__('The breed master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breed master could not be saved. Please, try again.'));
        }
        $speciesMaster = $this->BreedMaster->SpeciesMaster->find('list', ['limit' => 200]);
        $this->set(compact('breedMaster', 'speciesMaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Breed Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $breedMaster = $this->BreedMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $breedMaster = $this->BreedMaster->patchEntity($breedMaster, $this->request->getData());
            if ($this->BreedMaster->save($breedMaster)) {
                $this->Flash->success(__('The breed master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breed master could not be saved. Please, try again.'));
        }
        $speciesMaster = $this->BreedMaster->SpeciesMaster->find('list', ['limit' => 200]);
        $this->set(compact('breedMaster', 'speciesMaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Breed Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $breedMaster = $this->BreedMaster->get($id);
        if ($this->BreedMaster->delete($breedMaster)) {
            $this->Flash->success(__('The breed master has been deleted.'));
        } else {
            $this->Flash->error(__('The breed master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
