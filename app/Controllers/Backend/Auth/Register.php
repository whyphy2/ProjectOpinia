<?php

namespace App\Controllers\Backend\Auth;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use App\Models\AuthModel;


class Register extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        helper(['form']);
        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[user.email]',
            'password' => 'required',
            'phone' => 'required'
        ];
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'phone' => $this->request->getVar('phone')
            
        ];
        $model = new AuthModel();
        $register = $model->save($data);
        $this->respondCreated($register);
        return $this->respond('Success Register '. $this->request->getVar('name'));
    }

  
   
}
