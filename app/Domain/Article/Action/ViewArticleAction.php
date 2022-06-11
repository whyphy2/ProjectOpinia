<?php

namespace App\Domain\Article\Action;

use App\Models\ArticleModel;
use CodeIgniter\HTTP\IncomingRequest;
use App\Models\PostModel;

final class ViewArticleAction 
{

    public function handle()
    {
        
        $getArticle = new ArticleModel();
        $getIt = $getArticle->select("*")->join('post_type','post_type.id = articel.type')->join('user','user.id = articel.user')->get()->getResult();
        
        
        // findAll()->join('post_type','post_type.id = articel.type');
       
       
        return $getIt;
    }
}
