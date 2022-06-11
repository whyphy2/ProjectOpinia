<?php

namespace App\Controllers\Backend\Article;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Domain\Article\Action\ViewArticleAction;
use App\Models\ArticleModel;

class ViewArticle extends BaseController
{
    
    use ResponseTrait;
    public function view()
    {
        $action = new ViewArticleAction();
        $data = $action->handle();
        return $this->respond($data);
    }
}
