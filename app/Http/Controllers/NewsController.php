<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use App\Services\NewsService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    private $newsService;
    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsList = News::all();
        return view("news.index", ["newsList" => $newsList]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $tags = Tag::all();
        return view("news.create",['category' => $category,'tags' =>$tags,]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        DB::beginTransaction();
        try{
            $news = $this->newsService->store($request->validated());
            $this->newsService->storeTags($request->validated(),$news);
            DB::commit();
            return redirect(route("news.index"));
        }
        catch(Exception $e){
            DB::rollBack();
            return redirect(route("news.create"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $category = Category::all();
        $tags = Tag::all();
        return view("news.edit",[
            'category' => $category,
            'tags' =>$tags,
            'news'=>$news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try{
            $news = $this->newsService->update($request->validated(),$id);
            $this->newsService->updateTags($request->validated(),$news);
            DB::commit();
            return redirect(route("news.index"));
        }
        catch(Exception $e){
            DB::rollBack();
            return redirect(route("news.create"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
