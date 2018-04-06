<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DiseaseDescriptions Controller
 *
 * @property \App\Model\Table\DiseaseDescriptionsTable $DiseaseDescriptions
 *
 * @method \App\Model\Entity\DiseaseDescription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiseaseDescriptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Diseases']
        ];
        $diseaseDescriptions = $this->paginate($this->DiseaseDescriptions);

        $this->set(compact('diseaseDescriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Disease Description id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diseaseDescription = $this->DiseaseDescriptions->get($id, [
            'contain' => ['Diseases']
        ]);

        $this->set('diseaseDescription', $diseaseDescription);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diseaseDescription = $this->DiseaseDescriptions->newEntity();
        if ($this->request->is('post')) {
            $diseaseDescription = $this->DiseaseDescriptions->patchEntity($diseaseDescription, $this->request->getData());
            if ($this->DiseaseDescriptions->save($diseaseDescription)) {
                $this->Flash->success(__('The disease description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disease description could not be saved. Please, try again.'));
        }
        $diseases = $this->DiseaseDescriptions->Diseases->find('list', ['limit' => 200]);
        $this->set(compact('diseaseDescription', 'diseases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disease Description id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diseaseDescription = $this->DiseaseDescriptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diseaseDescription = $this->DiseaseDescriptions->patchEntity($diseaseDescription, $this->request->getData());
            if ($this->DiseaseDescriptions->save($diseaseDescription)) {
                $this->Flash->success(__('The disease description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disease description could not be saved. Please, try again.'));
        }
        $diseases = $this->DiseaseDescriptions->Diseases->find('list', ['limit' => 200]);
        $this->set(compact('diseaseDescription', 'diseases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disease Description id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diseaseDescription = $this->DiseaseDescriptions->get($id);
        if ($this->DiseaseDescriptions->delete($diseaseDescription)) {
            $this->Flash->success(__('The disease description has been deleted.'));
        } else {
            $this->Flash->error(__('The disease description could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
