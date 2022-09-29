<?php
namespace App\Services;

use App\Models\News;

class NewsService{

    public function store($validated, $file){
        $news = new News();
        $news->title = $validated["title"];
        $news->content = $validated["content"];
        $news->author = $validated["author"];
        $news->category_id = $validated["category_id"];
        $news->image = $this->fileStore($file);
        $news->save();
        //$news->id
        return $news;
    }

    public function fileStore($file){
        $file = $file["image"];
        $res = $file->storeAs("news" , "{$file->getClientOriginalName()}", "public") ;
        return $res;
    }

}
