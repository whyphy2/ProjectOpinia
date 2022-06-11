<?php

namespace App\Domain\Article\Action;

use App\Models\ArticleModel;
use CodeIgniter\HTTP\IncomingRequest;

final class CreateArticleAction 
{
    public function handle(IncomingRequest $request)
    {
      $newArticle = new ArticleModel();
      $newArticle->insert([
        'title' => $request->getVar('title'),
        'description' => $request->getVar('description'),
        'type' => (int) $request->getVar('type'),
        'user' => (int) $request->getVar('user')
      ]);

      return $newArticle;
    }
}