<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Genes Controller
 *
 * @property \App\Model\Table\GenesTable $Genes
 *
 * @method \App\Model\Entity\Gene[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GenesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $genes = $this->paginate($this->Genes);

        $this->set(compact('genes'));
    }

    /**
     * View method
     *
     * @param string|null $id Gene id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gene = $this->Genes->get($id, [
            'contain' => ['DiseasesGenes', 'GeneDescriptions']
        ]);

        $this->set('gene', $gene);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gene = $this->Genes->newEntity();
        if ($this->request->is('post')) {
            $gene = $this->Genes->patchEntity($gene, $this->request->getData());
            if ($this->Genes->save($gene)) {
                $this->Flash->success(__('The gene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gene could not be saved. Please, try again.'));
        }
        $this->set(compact('gene'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gene id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gene = $this->Genes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gene = $this->Genes->patchEntity($gene, $this->request->getData());
            if ($this->Genes->save($gene)) {
                $this->Flash->success(__('The gene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gene could not be saved. Please, try again.'));
        }
        $this->set(compact('gene'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gene id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gene = $this->Genes->get($id);
        if ($this->Genes->delete($gene)) {
            $this->Flash->success(__('The gene has been deleted.'));
        } else {
            $this->Flash->error(__('The gene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
