<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Gasto Controller
 *
 * @property \App\Model\Table\GastoTable $Gasto
 */
class GastoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Gasto->find()
            ->contain(['Funcionario', 'Produto']);
        $gasto = $this->paginate($query);

        $this->set(compact('gasto'));
    }

    /**
     * View method
     *
     * @param string|null $id Gasto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gasto = $this->Gasto->get($id, contain: ['Funcionario', 'Produto', 'Financeiro']);
        $this->set(compact('gasto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gasto = $this->Gasto->newEmptyEntity();
        if ($this->request->is('post')) {
            $gasto = $this->Gasto->patchEntity($gasto, $this->request->getData());
            if ($this->Gasto->save($gasto)) {
                $this->Flash->success(__('The gasto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gasto could not be saved. Please, try again.'));
        }
        $funcionario = $this->Gasto->Funcionario->find('list', limit: 200)->all();
        $produto = $this->Gasto->Produto->find('list', limit: 200)->all();
        $this->set(compact('gasto', 'funcionario', 'produto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gasto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gasto = $this->Gasto->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gasto = $this->Gasto->patchEntity($gasto, $this->request->getData());
            if ($this->Gasto->save($gasto)) {
                $this->Flash->success(__('The gasto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gasto could not be saved. Please, try again.'));
        }
        $funcionario = $this->Gasto->Funcionario->find('list', limit: 200)->all();
        $produto = $this->Gasto->Produto->find('list', limit: 200)->all();
        $this->set(compact('gasto', 'funcionario', 'produto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gasto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gasto = $this->Gasto->get($id);
        if ($this->Gasto->delete($gasto)) {
            $this->Flash->success(__('The gasto has been deleted.'));
        } else {
            $this->Flash->error(__('The gasto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
