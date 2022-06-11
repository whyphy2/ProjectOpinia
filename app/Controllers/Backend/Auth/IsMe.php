<?php

namespace App\Controllers\Backend\Auth;


use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class IsMe extends ResourceController
{
   
    use ResponseTrait;
    public function index()
    {
        $key = getenv('SECRET_KEY');
        $header = $this->request->getServer('HTTP_AUTHORIZATION');
        if(!$header) return $this->failUnauthorized('MUST LOGIN');

        $getToken = explode(" ", $header)[1];
        var_dump($getToken);


        try {
            $decode = JWT::decode($getToken,new key($key,'HS256'));
            $response = [
                'id' => $decode->uid,
                'name' => $decode->uname,
                'email' => $decode->uemail,
                'password' => $decode->upassword,
                'phone' => $decode->uphone
            ];
            return $this->respond($response);
        } catch (\Throwable $th) {
            return $this->fail('Invalid');
        }

    
    }

   
}
