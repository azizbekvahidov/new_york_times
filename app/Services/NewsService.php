<?php
namespace App\Services;

use App\Models\News;

class NewsService{

    public function store($validated){
        $validated["image"] = $validated["image"]->storeAs("news" , "{$validated["image"]->getClientOriginalName()}", "public");
        $news = News::create($validated);
        return $news;
    }


}
