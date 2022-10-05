<?php
namespace App\Services;

use App\Models\News;
use App\Models\Tag;

class NewsService{

    public function store($validated){
        $validated["image"] = $validated["image"]->storeAs("news" , "{$validated["image"]->getClientOriginalName()}", "public");
        $news = News::create($validated);
        return $news;
    }

    public function storeTags($validated,$news){ //das,da,ere
        foreach($validated['tags'] as $tag) {    // 3,  5, 8
            $tagModel = Tag::firstOrCreate([
                "name"=>$tag,
            ]);
            $news->tags()->attach($tagModel->id);
        }
    }

    public function update($validated,$id){

        $news = News::where($id)->update($validated);
        return $news;
    }

    public function updateTags($validated,$news){ // gdfs, das, ere, erw
        foreach($validated['tags'] as $tag) {     //        3    8
            $tagModel = Tag::firstOrCreate([
                "name"=>$tag,
            ]);
            $news->tags()->attach($tagModel->id);
        }
    }

}
