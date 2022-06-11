<?php

namespace App\Domain\Article\Action;

use App\Models\ArticleModel;
use CodeIgniter\HTTP\IncomingRequest;

final class UpdateArticleAction 
{
    public function handle(IncomingRequest $request,$id)
    {
        $getData = new ArticleModel();
        $checked = $getData->where('id', $id)->findAll();
        if (!$checked) return print_r("can't proses");
        
        $getData->update($id,[
            'title' => $request->getVar('title'),
            'description'=> $request->getVar('description'),
            'type' => $request->getVar('type'),
            'user' => $request->getVar('user')
        ]);
        

      return print_r("data has ben update");
    }
}