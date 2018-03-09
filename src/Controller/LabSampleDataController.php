<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LabSampleData Controller
 *
 * @property \App\Model\Table\LabSampleDataTable $LabSampleData
 *
 * @method \App\Model\Entity\LabSampleData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LabSampleDataController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SampleRegistration', 'Labs', 'Species', 'Breeds', 'SampleLists', 'YearlyLabs', 'MonthlyLabs', 'SampleApplicableTest']
        ];
        $labSampleData = $this->paginate($this->LabSampleData);

        $this->set(compact('labSampleData'));
    }

    /**
     * View method
     *
     * @param string|null $id Lab Sample Data id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $labSampleData = $this->LabSampleData->get($id, [
            'contain' => ['SampleRegistration', 'Labs', 'Species', 'Breeds', 'SampleLists', 'YearlyLabs', 'MonthlyLabs', 'SampleApplicableTest']
        ]);

        $this->set('labSampleData', $labSampleData);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $labSampleData = $this->LabSampleData->newEntity();
        if ($this->request->is('post')) {
            $labSampleData = $this->LabSampleData->patchEntity($labSampleData, $this->request->getData());
            if ($this->LabSampleData->save($labSampleData)) {
                $this->Flash->success(__('The lab sample data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lab sample data could not be saved. Please, try again.'));
        }
        $sampleRegistration = $this->LabSampleData->SampleRegistration->find('list', ['limit' => 200]);
        $labs = $this->LabSampleData->Labs->find('list', ['limit' => 200]);
        $species = $this->LabSampleData->Species->find('list', ['limit' => 200]);
        $breeds = $this->LabSampleData->Breeds->find('list', ['limit' => 200]);
        $sampleLists = $this->LabSampleData->SampleLists->find('list', ['limit' => 200]);
        $yearlyLabs = $this->LabSampleData->YearlyLabs->find('list', ['limit' => 200]);
        $monthlyLabs = $this->LabSampleData->MonthlyLabs->find('list', ['limit' => 200]);
        $sampleApplicableTest = $this->LabSampleData->SampleApplicableTest->find('list', ['limit' => 200]);
        $this->set(compact('labSampleData', 'sampleRegistration', 'labs', 'species', 'breeds', 'sampleLists', 'yearlyLabs', 'monthlyLabs', 'sampleApplicableTest'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lab Sample Data id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $labSampleData = $this->LabSampleData->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $labSampleData = $this->LabSampleData->patchEntity($labSampleData, $this->request->getData());
            if ($this->LabSampleData->save($labSampleData)) {
                $this->Flash->success(__('The lab sample data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lab sample data could not be saved. Please, try again.'));
        }
        $sampleRegistration = $this->LabSampleData->SampleRegistration->find('list', ['limit' => 200]);
        $labs = $this->LabSampleData->Labs->find('list', ['limit' => 200]);
        $species = $this->LabSampleData->Species->find('list', ['limit' => 200]);
        $breeds = $this->LabSampleData->Breeds->find('list', ['limit' => 200]);
        $sampleLists = $this->LabSampleData->SampleLists->find('list', ['limit' => 200]);
        $yearlyLabs = $this->LabSampleData->YearlyLabs->find('list', ['limit' => 200]);
        $monthlyLabs = $this->LabSampleData->MonthlyLabs->find('list', ['limit' => 200]);
        $sampleApplicableTest = $this->LabSampleData->SampleApplicableTest->find('list', ['limit' => 200]);
        $this->set(compact('labSampleData', 'sampleRegistration', 'labs', 'species', 'breeds', 'sampleLists', 'yearlyLabs', 'monthlyLabs', 'sampleApplicableTest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lab Sample Data id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $labSampleData = $this->LabSampleData->get($id);
        if ($this->LabSampleData->delete($labSampleData)) {
            $this->Flash->success(__('The lab sample data has been deleted.'));
        } else {
            $this->Flash->error(__('The lab sample data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
