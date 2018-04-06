<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DiseasesGenes Controller
 *
 * @property \App\Model\Table\DiseasesGenesTable $DiseasesGenes
 *
 * @method \App\Model\Entity\DiseasesGene[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiseasesGenesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Diseases', 'Genes']
        ];
        $diseasesGenes = $this->paginate($this->DiseasesGenes);

        $this->set(compact('diseasesGenes'));
    }

    /**
     * View method
     *
     * @param string|null $id Diseases Gene id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diseasesGene = $this->DiseasesGenes->get($id, [
            'contain' => ['Diseases', 'Genes']
        ]);

        $this->set('diseasesGene', $diseasesGene);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diseasesGene = $this->DiseasesGenes->newEntity();
        if ($this->request->is('post')) {
            $diseasesGene = $this->DiseasesGenes->patchEntity($diseasesGene, $this->request->getData());
            if ($this->DiseasesGenes->save($diseasesGene)) {
                $this->Flash->success(__('The diseases gene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diseases gene could not be saved. Please, try again.'));
        }
        $diseases = $this->DiseasesGenes->Diseases->find('list', ['limit' => 200]);
        $genes = $this->DiseasesGenes->Genes->find('list', ['limit' => 200]);
        $this->set(compact('diseasesGene', 'diseases', 'genes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Diseases Gene id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diseasesGene = $this->DiseasesGenes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diseasesGene = $this->DiseasesGenes->patchEntity($diseasesGene, $this->request->getData());
            if ($this->DiseasesGenes->save($diseasesGene)) {
                $this->Flash->success(__('The diseases gene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diseases gene could not be saved. Please, try again.'));
        }
        $diseases = $this->DiseasesGenes->Diseases->find('list', ['limit' => 200]);
        $genes = $this->DiseasesGenes->Genes->find('list', ['limit' => 200]);
        $this->set(compact('diseasesGene', 'diseases', 'genes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Diseases Gene id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diseasesGene = $this->DiseasesGenes->get($id);
        if ($this->DiseasesGenes->delete($diseasesGene)) {
            $this->Flash->success(__('The diseases gene has been deleted.'));
        } else {
            $this->Flash->error(__('The diseases gene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
