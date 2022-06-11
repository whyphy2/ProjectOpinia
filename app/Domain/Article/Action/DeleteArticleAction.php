<?php

namespace App\Domain\Article\Action;

use App\Models\ArticleModel;
use CodeIgniter\HTTP\IncomingRequest;

final class DeleteArticleAction 
{
    public function handle(IncomingRequest $request,$id)
    {
      $getData = new ArticleModel();

        $checked = $getData->where('id', $id)->findAll();
        if (!$checked) return print_r("data cant be proses");
        
        $getData->delete($id);
      
      return print_r('data has delete');
    }
}