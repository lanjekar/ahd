<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SampleApplicableTest Controller
 *
 * @property \App\Model\Table\SampleApplicableTestTable $SampleApplicableTest
 *
 * @method \App\Model\Entity\SampleApplicableTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SampleApplicableTestController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SampleRegistration', 'LabSampleData', 'TestLists', 'Diseases']
        ];
        $sampleApplicableTest = $this->paginate($this->SampleApplicableTest);

        $this->set(compact('sampleApplicableTest'));
    }

    /**
     * View method
     *
     * @param string|null $id Sample Applicable Test id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sampleApplicableTest = $this->SampleApplicableTest->get($id, [
            'contain' => ['SampleRegistration', 'LabSampleData', 'TestLists', 'Diseases']
        ]);

        $this->set('sampleApplicableTest', $sampleApplicableTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sampleApplicableTest = $this->SampleApplicableTest->newEntity();
        if ($this->request->is('post')) {
            $sampleApplicableTest = $this->SampleApplicableTest->patchEntity($sampleApplicableTest, $this->request->getData());
            if ($this->SampleApplicableTest->save($sampleApplicableTest)) {
                $this->Flash->success(__('The sample applicable test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample applicable test could not be saved. Please, try again.'));
        }
        $sampleRegistration = $this->SampleApplicableTest->SampleRegistration->find('list', ['limit' => 200]);
        $labSampleData = $this->SampleApplicableTest->LabSampleData->find('list', ['limit' => 200]);
        $testLists = $this->SampleApplicableTest->TestLists->find('list', ['limit' => 200]);
        $diseases = $this->SampleApplicableTest->Diseases->find('list', ['limit' => 200]);
        $this->set(compact('sampleApplicableTest', 'sampleRegistration', 'labSampleData', 'testLists', 'diseases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sample Applicable Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sampleApplicableTest = $this->SampleApplicableTest->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sampleApplicableTest = $this->SampleApplicableTest->patchEntity($sampleApplicableTest, $this->request->getData());
            if ($this->SampleApplicableTest->save($sampleApplicableTest)) {
                $this->Flash->success(__('The sample applicable test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sample applicable test could not be saved. Please, try again.'));
        }
        $sampleRegistration = $this->SampleApplicableTest->SampleRegistration->find('list', ['limit' => 200]);
        $labSampleData = $this->SampleApplicableTest->LabSampleData->find('list', ['limit' => 200]);
        $testLists = $this->SampleApplicableTest->TestLists->find('list', ['limit' => 200]);
        $diseases = $this->SampleApplicableTest->Diseases->find('list', ['limit' => 200]);
        $this->set(compact('sampleApplicableTest', 'sampleRegistration', 'labSampleData', 'testLists', 'diseases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sample Applicable Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sampleApplicableTest = $this->SampleApplicableTest->get($id);
        if ($this->SampleApplicableTest->delete($sampleApplicableTest)) {
            $this->Flash->success(__('The sample applicable test has been deleted.'));
        } else {
            $this->Flash->error(__('The sample applicable test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
