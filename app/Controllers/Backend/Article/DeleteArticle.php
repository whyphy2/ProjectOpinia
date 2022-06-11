<?php

namespace App\Controllers\Backend\Article;

use App\Controllers\BaseController;
use App\Domain\Article\Action\DeleteArticleAction;
use CodeIgniter\API\ResponseTrait;

class DeleteArticle extends BaseController
{
    use ResponseTrait;
    public function index($id)
    {
        $deleteArticle = new DeleteArticleAction();
        $deleteArticle->handle($this->request,$id);
        
    }
}
