<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
class UserController extends Controller
{
    // show users list
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('add_user', $data);
    }
    // insert data
    public function store() {
        $userModel = new UserModel();
        $data = [
            'nom' => $this->request->getVar('nom'),
            'prénom'  => $this->request->getVar('prénom'),
            'age'  => $this->request->getVar('age'),
            'cvl'  => $this->request->getVar('cvl'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/')); //add_user
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/'));
    }    
}