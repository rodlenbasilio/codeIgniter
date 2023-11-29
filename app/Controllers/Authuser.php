<?php
namespace App\Controllers;


class Authuser extends BaseController
{
    public function index() : string
    {
        return view('login');
    }



    public function authenticate()#: string 
    {
        
        if ($this->request->getMethod() == 'post')
        {

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $newsusers_model = new \App\Models\AuthModel();  
            $newsusers = $newsusers_model->where('username', [$username])->findAll();
           

            if (count($newsusers) == 0)
            {
                
                return view('errors/error_login');
            }
           

            if (strcmp(sha1($password), $newsusers[0]->password) !== 0)
            {
                return view('errors/error_login');
                
            }

            $data = [
                'isAdminLoggedIn' => true,
            
            ];

            session()->set($data);
            return redirect()->to(base_url().'news');
        }


    }


    public function vregister() : string
    {
        return view('register');
    }

    public function register()
    {
        if ($this->request->getMethod() == 'post')
        {

            $username = $this->request->getVar('username');
            $password = sha1($this->request->getVar('password'));

            $newsusers_model = new \App\Models\AuthModel();  

            $register = array("username"=> $username, "password"=>$password);

            $newsusers_model->save($register);            
            return redirect()->to(base_url().'login');
        }

    }

    public function logout(){
       
        session()->destroy();
        return redirect()->to(base_url().'login');
    }

   
   


}