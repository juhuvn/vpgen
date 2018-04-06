<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeneDescriptions Controller
 *
 * @property \App\Model\Table\GeneDescriptionsTable $GeneDescriptions
 *
 * @method \App\Model\Entity\GeneDescription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneDescriptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Genes']
        ];
        $geneDescriptions = $this->paginate($this->GeneDescriptions);

        $this->set(compact('geneDescriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Gene Description id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geneDescription = $this->GeneDescriptions->get($id, [
            'contain' => ['Genes']
        ]);

        $this->set('geneDescription', $geneDescription);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geneDescription = $this->GeneDescriptions->newEntity();
        if ($this->request->is('post')) {
            $geneDescription = $this->GeneDescriptions->patchEntity($geneDescription, $this->request->getData());
            if ($this->GeneDescriptions->save($geneDescription)) {
                $this->Flash->success(__('The gene description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gene description could not be saved. Please, try again.'));
        }
        $genes = $this->GeneDescriptions->Genes->find('list', ['limit' => 200]);
        $this->set(compact('geneDescription', 'genes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gene Description id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geneDescription = $this->GeneDescriptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geneDescription = $this->GeneDescriptions->patchEntity($geneDescription, $this->request->getData());
            if ($this->GeneDescriptions->save($geneDescription)) {
                $this->Flash->success(__('The gene description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gene description could not be saved. Please, try again.'));
        }
        $genes = $this->GeneDescriptions->Genes->find('list', ['limit' => 200]);
        $this->set(compact('geneDescription', 'genes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gene Description id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geneDescription = $this->GeneDescriptions->get($id);
        if ($this->GeneDescriptions->delete($geneDescription)) {
            $this->Flash->success(__('The gene description has been deleted.'));
        } else {
            $this->Flash->error(__('The gene description could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
