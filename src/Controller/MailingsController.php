<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mailings Controller
 *
 * @property \App\Model\Table\MailingsTable $Mailings
 */
class MailingsController extends AppController
{
    public $paginate = [
        // Other keys here.
        'limit' => 1000
    ];
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mailings = $this->paginate($this->Mailings);

        $this->set(compact('mailings'));
        $this->set('_serialize', ['mailings']);
    }

    /**
     * View method
     *
     * @param string|null $id Mailing id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mailing = $this->Mailings->get($id, [
            'contain' => []
        ]);

        $this->set('mailing', $mailing);
        $this->set('_serialize', ['mailing']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mailing = $this->Mailings->newEntity();
        if ($this->request->is('post')) {
            $mailing = $this->Mailings->patchEntity($mailing, $this->request->data);
            if ($this->Mailings->save($mailing)) {
                $this->Flash->success(__('The mailing has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mailing could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mailing'));
        $this->set('_serialize', ['mailing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mailing id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mailing = $this->Mailings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mailing = $this->Mailings->patchEntity($mailing, $this->request->data);
            if ($this->Mailings->save($mailing)) {
                $this->Flash->success(__('The mailing has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mailing could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mailing'));
        $this->set('_serialize', ['mailing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mailing id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mailing = $this->Mailings->get($id);
        if ($this->Mailings->delete($mailing)) {
            $this->Flash->success(__('The mailing has been deleted.'));
        } else {
            $this->Flash->error(__('The mailing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
