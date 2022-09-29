<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TagService;

class TagController extends Controller
{
    private $tagService;
    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagList = Tag::all();
        return view("tag.index", ["tagList" => $tagList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tag.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request )
    {
        $this->tagService->create($request->validated());
        return redirect(route("tag.index"));
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
        $tag = Tag::find($id);
        return view('tag.edit',['tag'=>$tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        $this->tagService->update($request->validated() , $id);
        return redirect(route('tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $categoryList = Category::where('id', $id)->firstorfail()->delete();
        // return redirect()->route("category.index");
        $tagList = Tag::find($id);//обе логике работают исправно
        $tagList->delete();
        return redirect()->route("tag.index");
    }
}
