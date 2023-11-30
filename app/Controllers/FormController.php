<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

class FormController extends Controller
{
    public function index() {
        helper(['form']);
        $data = [];
        return view('register');
    }
 
    public function store() {
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[5]|max_length[10]',
            'password' => 'required|min_length[8]',
            'cpassword' => 'matches[password]',
            'firstname' => 'required|min_length[2]',
            'lastname' => 'required|min_length[2]',
        ];
          
        if($this->validate($rules)){
            $formModel = new FormModel();
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
            ];
            $formModel->save($data);
            return redirect()->to('login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }        
    }
}