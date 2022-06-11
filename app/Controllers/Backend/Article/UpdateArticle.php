<?php

namespace App\Controllers\Backend\Article;


use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Domain\Article\Action\UpdateArticleAction;

class UpdateArticle extends BaseController
{
    use ResponseTrait;
    public function index($id = NULL)
    {   
        $data = new UpdateArticleAction();
        $data->handle($this->request,$id);
    }
}
