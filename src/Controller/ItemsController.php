<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 */
class ItemsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        // By default, CakePHP will (sensibly) default to preventing users from accessing any actions on a controller.
        // These actions, however, are typically required for users who have not yet logged in.
        $this->Authentication->allowUnauthenticated(['index', 'view']);
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
            $query = $this->Items->find();
        } else {
            $query = $this->Items->find()
                ->where('availability');
        }
        $items = $this->paginate($query);
        $this->set(compact('items', 'user'));
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $item = $this->Items->get($id, contain: ['Orders']);

        $this->set(compact('item'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEmptyEntity();
        $this->Authorization->authorize($item, 'add');
        if ($this->request->is('post')) {
            $this->Items->patchEntity($item, $this->request->getData());
            $photo = $this->request->getData('photo');
            if ($photo && $photo->getError() == UPLOAD_ERR_OK) {
                $acceptableTypes = ['image/jpeg', 'image/png'];
                if (in_array($photo->getClientMediaType(), $acceptableTypes)) {
                    $filename = $photo->getClientFilename();
                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
                    $newFilename = uniqid() . '.' . $extension;
                    $destination = WWW_ROOT . 'img' . DS . $newFilename;
                    try {
                        $photo->moveTo($destination);
                        $item->photo = $newFilename;
                    } catch (\Exception $e) {
                        $this->Flash->error(__('The file could not be saved. Please, try again.'));
                    }
                } else {
                    $this->Flash->error(__('Invalid file type. Please upload a JPEG or PNG image.'));
                }
            } else {
                $item->photo = 'default.png';
            }

            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $orders = $this->Items->Orders->find('list', limit: 200)->all();
        $this->set(compact('item', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, contain: ['Orders']);
        $this->Authorization->authorize($item, 'edit');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $photo = $data['photo'];
            if ($photo && $photo->getError() == UPLOAD_ERR_OK) {
                $acceptableTypes = ['image/jpeg', 'image/png'];
                if (in_array($photo->getClientMediaType(), $acceptableTypes)) {
                    $filename = $photo->getClientFilename();
                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
                    $newFilename = uniqid() . '.' . $extension;
                    $destination = WWW_ROOT . 'img' . DS . $newFilename;
                    try {
                        $photo->moveTo($destination);
                        $data['photo'] = $newFilename;
                    } catch (\Exception $e) {
                        $this->Flash->error(__('The file could not be saved. Please, try again.'));
                    }
                } else {
                    $this->Flash->error(__('Invalid file type. Please upload a JPEG or PNG image.'));
                }
            } else {
                $data['photo'] = $item->photo;
            }

            $item = $this->Items->patchEntity($item, $data);

            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $orders = $this->Items->Orders->find('list', limit: 200)->all();
        $this->set(compact('item', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        $this->Authorization->authorize($item, 'delete');
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
