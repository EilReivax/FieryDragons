<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 */
class OrdersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        // By default, CakePHP will (sensibly) default to preventing users from accessing any actions on a controller.
        // These actions, however, are typically required for users who have not yet logged in.
        $this->Authentication->allowUnauthenticated(['view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $user = $this->Authentication->getIdentity();

        if ($user && $user->admin) {
            $query = $this->Orders->find()
                ->contain(['Users']);
        } else {
            $query = $this->Orders->find()
                ->where(['Orders.user_id' => $user->id])
                ->contain(['Users']);
        }
        $orders = $this->paginate($query);

        $this->set(compact('orders', 'user'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Authentication->getIdentity();
        $order = $this->Orders->get($id, contain: ['Users', 'Items']);
        $this->Authorization->authorize($order, 'view');
        $this->set(compact('order', 'user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $order = $this->Orders->newEmptyEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());

            if (empty($order->items) || count($order->items) == 0) {
                $this->Flash->error(__('Please select at least one item for the order.'));
            } else {
                $subtotal = 0;
                foreach ($order->items as $item) {
                    $subtotal += $item->price;
                }
                $order->subtotal = $subtotal;
                if ($this->Orders->save($order)) {
                    $this->Flash->success(__('The order has been saved.'));
                    return $this->redirect(['action' => 'view', $order->id]);
                }
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }
        $currentUser = $this->Authentication->getIdentity();
        $users = $this->Orders->Users->find('list', limit: 200)->all();
        $items = $this->Orders->Items->find('list', [
            'limit' => 200,
            'conditions' => ['Items.availability' => 1]
        ])->all();
        $this->set(compact('order', 'users', 'items', 'currentUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, contain: ['Items']);
        $this->Authorization->authorize($order, 'edit');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());

            if (empty($order->items) || count($order->items) == 0) {
                $this->Flash->error(__('Please select at least one item for the order.'));
            } else {
                $subtotal = 0;
                foreach ($order->items as $item) {
                    $subtotal += $item->price;
                }
                $order->subtotal = $subtotal;
                if ($this->Orders->save($order)) {
                    $this->Flash->success(__('The order has been saved.'));
                    return $this->redirect(['action' => 'view', $order->id]);
                }
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }
        $users = $this->Orders->Users->find('list', limit: 200)->all();
        $items = $this->Orders->Items->find('list', limit: 200)->all();
        $this->set(compact('order', 'users', 'items'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        $this->Authorization->authorize($order, 'delete');
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
