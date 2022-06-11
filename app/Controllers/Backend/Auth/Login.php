<?php

namespace App\Controllers\Backend\Auth;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use App\Models\AuthModel;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Login extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        helper(['form']);
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $model = new AuthModel();
        $user = $model->where('email', $this->request->getVar('email'))->first();
        if(!$user) return $this->failNotFound('Password or email wrong');
        
        $checkpassword = password_verify($this->request->getVar('password'),$user['password']);
        if(!$checkpassword) return $this->failNotFound('Password or Email wrong');

        $key = getenv('SECRET_KEY');
        $loadtoken = [
            'iat' => 1356999524,
            'nbf' => 1357000000,
            "uid" => $user['id'],
            "uname" => $user['name'],
            "uemail" => $user['email'],
            "upassword" => $user['password'],
            "uphone" => $user['phone']
        ];

        $token = JWT::encode($loadtoken,$key,'HS256');
        // $decode = JWT::decode($token, new key($key,'HS256'));
        // print_r($decode);


        return $this->respond("KODE TOKEN JWT : ".$token);
        
    }
}
