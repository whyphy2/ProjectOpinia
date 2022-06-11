<?php

namespace App\Controllers\Backend\Article;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Domain\Article\Action\CreateArticleAction;

class CreateArticle extends BaseController
{
    use responseTrait;
    public function proses()
    {
        $action = new CreateArticleAction();
        $action->handle($this->request); 

        return $this->respond('Success Insert a new Article');
    }

}

