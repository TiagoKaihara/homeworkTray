<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sellers Controller
 *
 * @property \App\Model\Table\SellersTable $Sellers
 *
 * @method \App\Model\Entity\Seller[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SellersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $sellers = $this->paginate($this->Sellers);

        $this->set(compact('sellers'));
    }

    /**
     * View method
     *
     * @param string|null $id Seller id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$comm = 8.5; // porcentagem da comissão 
		
        $seller = $this->Sellers->get($id, [
            'contain' => ['Sells'],
        ]);
		foreach ($seller->sells as $sells):
			$totalSells += round($sells->price,2);
			$totalComm += round($sells->price* ($comm / 100),2);
		endforeach;
		
        $this->set('seller', $seller);
		$this->set('comm', $comm);
        $this->set('totalSells', $totalSells);
		$this->set('totalComm', $totalComm);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seller = $this->Sellers->newEntity();
        if ($this->request->is('post')) {
            $seller = $this->Sellers->patchEntity($seller, $this->request->getData());
            if ($this->Sellers->save($seller)) {
                $this->Flash->success(__('Vendedor cadastrado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro. Por favor, tente novamente.'));
        }
        $this->set(compact('seller'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Seller id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seller = $this->Sellers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seller = $this->Sellers->patchEntity($seller, $this->request->getData());
            if ($this->Sellers->save($seller)) {
                $this->Flash->success(__('Vendedor salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro. Tente novamente.'));
        }
        $this->set(compact('seller'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Seller id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seller = $this->Sellers->get($id);
        if ($this->Sellers->delete($seller)) {
            $this->Flash->success(__('Vendedor deletado.'));
        } else {
            $this->Flash->error(__('Erro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
